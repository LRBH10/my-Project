#ifndef SENARIO_H
#define SENARIO_H
#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "qmath.h"
#include <stdio.h>

#define N2      256
#define sort    "V.txt"

void MainWindow::senario()
{
    remplire();
    //Vitesse moyenne
    vitMoy=ui->VitesseMoyenne->value();

    //Nbr de vehicules
    NBRV=ui->NBRV->value();

    //Nbr de agents
    NBRA=ui->NBRA->value();

    //redom destination
    for(int i=0;i<NBRV;i++) des[i]=qrand()%N2;

    //temps de simulation
    timeSi=ui->tempSimul->value();

    //interval de calc region
    interval=ui->interval->value();

    //interval de generation de donnees
    intervalDon=ui->intervalDon->value();

    //Mouvement
    if(ui->MOVE->isChecked())   MOVE=true;
    else                        MOVE=false;

    //Communication
    if(ui->COMMUNICATION->isChecked())   COMM=true;
    else                                 COMM=false;

    //Generation de donnees
    if(ui->GEDON->isChecked())   DONN=true;
    else                         DONN=false;

    //Disseminitaion
    if(ui->DISSEMINATION->isChecked())   DISS=true;
    else                                 DISS=false;


        //Inforamtion
    QMessageBox::information(this,"information","Nombre de Véhicules: "+QVariant(NBRV).toString()+
                             "\nNombre de Agents: "+QVariant(NBRA).toString()+
                             "\nVitesse Moyenne : "+QVariant(vitMoy).toString()+
                             "\nTemps de Simulation : "+QVariant(timeSi).toString()+
                             "\nInterval de Region : "+QVariant(interval).toString()+
                             "\nInterval de Donnees: "+QVariant(intervalDon).toString());

        //activer la generationde scnario
    ui->pushButton_4->setEnabled(true);
    FILE *f;
    f=fopen(sort,"w");
    fclose(f);
}


float MainWindow::timeDestination(int src,int des,int vit)
{
        float x=mapp[src].x-mapp[des].x;
        float y=mapp[src].y-mapp[des].y;
        float dis=sqrt(x*x+y*y);
        float t=dis/float(vit);
        return t;
}
int MainWindow::taille(Reli1 *p)
{
        int t=0;
        while(p!=NULL)
        {
                p=p->s;
                t++;
        }
        return t;

}
float MainWindow::distance(int src,int des)
{
        float x=mapp[src].x-mapp[des].x;
        float y=mapp[src].y-mapp[des].y;
        float dis=sqrt(x*x+y*y);
        return dis;
}

int MainWindow::randomDestination(int i,int ind)
{
        Reli1 *p=&mapp[i];
        int inter=i;
        int destina;
        destina=des[ind];

        //calcule de nomvre de liason de ce point
        int t=taille(&mapp[i]);
        float dista=1000000000.0;
        p=p->s;
        for(int j=1;j<t;j++)
        {
                float cal=distance(p->ind,destina);
                if(cal<dista )
                {
                        inter=p->ind;
                        dista=cal;
                }
                p=p->s;
        }
        //printf("%d %d \t",ind,inter);
        if(inter==destina)
        {
              des[ind]=qrand()%N2;

        }
        //choisir aliatoirement le prochaine poin/
        return inter;
}
void MainWindow::remplire()
{
    FILE *f;
    f=fopen("rabah.txt","r");

    for (int i=0;i<N2;i++)
    {
            Reli1 &p=mapp[i];
            int n;
            float x,y;
            int ind;

            fscanf(f,"%d",&n);
            fscanf(f,"%d",&ind);
            fscanf(f,"%f",&x);
            fscanf(f,"%f",&y);

            p.ind=ind;
            p.x=x;
            p.y=y;
            p.s=NULL;

            Reli1 *t=&p;

            for(int i=0;i<n-1;i++)
            {
                    t->s=new Reli1;
                    fscanf(f,"%d",&ind);
                    fscanf(f,"%f",&x);
                    fscanf(f,"%f",&y);

                    t->s->ind=ind;
                    t->s->x=x;
                    t->s->y=y;
                    t->s->s=NULL;
                    t=t->s;
            }

    }
    fclose(f);
    fopen("rabahV.txt","w");
    for (int i=0;i<N2;i++)
    {
        int t=taille(&mapp[i]);
        Reli1 *p=&mapp[i];
        fprintf(f,"%d ",t);
        for(int j=0;j<t;j++)
        {
            fprintf(f,"%d %d %d\t",p->ind,(int)p->x,(int)p->y);
            p=p->s;
        }
        fprintf(f,"\n");

    }
    fclose(f);

}
void MainWindow::mouvement()
{
    FILE *f;
    f=fopen("V.txt","a");
    ///SINEARIO DE MOVMENT DES VHICULES
    int tmps[500];
    int t=0;
    for(int i=0;i<NBRV;i++) tmps[i]=0;

    while(t<timeSi && MOVE)
    {
        fprintf(f,"\n\n");
        for(int ind=0;ind<NBRV;ind++)
        {
            if(tmps[ind]==t)
            {
            if(t!=0)    voiture[ind].indsrc=voiture[ind].inddst;

            //sauvgarder le temps
            voiture[ind].time=t;

            //recuper la nouvel destination
            voiture[ind].inddst=randomDestination(voiture[ind].indsrc,ind);

            //gener une vitesse

            if(t==0)    voiture[ind].vitesse=qrand()%vitMoy+5;
            else
            {
                int MaxV=vitMoy;
                for(int a=0;a<NBRV;a++)
                    if(ind!=a && voiture[a].indsrc==voiture[ind].indsrc && voiture[a].inddst==voiture[ind].inddst)
                    {
                        float L_totale=distance(voiture[ind].indsrc,voiture[ind].inddst);
                        float L_a_parcouru=(voiture[ind].time-voiture[a].time)*voiture[a].vitesse;
                        float T_a_reste=(L_totale-L_a_parcouru)/voiture[a].vitesse;
                        float V_Max=L_totale/T_a_reste;
                        if(V_Max<MaxV)  MaxV=(int)V_Max;
                        /*QMessageBox::critical(this,"fuck","L_totle: "+QVariant(L_totale).toString()+
                                              "\nL_a_parcouru: "+QVariant(L_a_parcouru).toString()+
                                              "\nT_a_reste: "+QVariant(T_a_reste).toString()+
                                              "\nV_Max: "+QVariant(V_Max).toString());//*/
                     }
                //QMessageBox::critical(this,"raba","MaxVitesse "+QVariant(MaxV).toString());
                if(MaxV>vitMoy) MaxV=vitMoy;
                voiture[ind].vitesse=qrand()%MaxV+5;
            }
            //if(voiture[ind].vitesse>vitMoy) QMessageBox::critical(this,"fuck","fucktttttto");
            //calculer la periode de temps pour arriver a la destinition
            float dif=timeDestination(voiture[ind].indsrc,voiture[ind].inddst,voiture[ind].vitesse);

            /*QMessageBox::information(this,"info","source "+QVariant(voiture[ind].indsrc).toString()+
                                     "\ndest "+QVariant(voiture[ind].inddst).toString()+
                                     "\ntime "+QVariant(voiture[ind].time).toString()+
                                     "\nvitesse"+QVariant(voiture[ind].vitesse).toString());//*/

            if(voiture[ind].indsrc==voiture[ind].inddst)
            {
                    QMessageBox::critical(this,"balak","rahou ibougi fplactou");
                    dif=1;
            }


            int d=voiture[ind].inddst;
            int v=voiture[ind].vitesse;

            char s[200];

            /*QMessageBox::information(this,"info","x "+QVariant(mapp[d].x).toString()+
                                     "\ny "+QVariant(mapp[d].y).toString()+
                                     "\nind "+QVariant(ind).toString()+
                                     "\nvitesse "+QVariant(v).toString());//*/


            //fprintf(f,"%d %2.1f %2.1f %d\n",ind,mapp[d].x,mapp[d].y,v);
            sprintf(s,"$ns_ at %d \"$vehicule_(%d) setdest %2.1f %2.1f %d\"",t,ind,mapp[d].x,mapp[d].y,v);
            fprintf(f,"%s\n",s);

            sprintf(s,"$ns_ at %d \"$agent_(%d) init-vitesse %d\"",t,ind,v);
            fprintf(f,"%s\n",s);

            tmps[ind]=tmps[ind]+(int)dif+1;//
            }
        }

        int min=timeSi;
        for(int i=0;i<NBRV;i++) if(min>tmps[i]) min=tmps[i];
        if(t==min)  QMessageBox::critical(this,"fuccccccch","ffffffffffffffffuuuuuuuuuuuuuuuuuuuuuuu");
        else t=min;//*/
        //t++;
        //QMessageBox::information(this,"rabah",QVariant(t).toString());
    }
    fclose(f);
    }//*/

void MainWindow::createSenario()
{
    FILE *f;
    for(int ind=0;ind<NBRV;ind++)
    {
        f=fopen(sort,"a");

        int i=rand()%N2;
        float x=mapp[i].x;
        float y=mapp[i].y;

        voiture[ind].indsrc=i;
        //indice0V[ind]=i;


        char zs[75];
        sprintf(zs,"$vehicule_(%d) set Z_ 0 ",ind);

        char xs[75];
        sprintf(xs,"$vehicule_(%d) set X_ %f ",ind,x);

        char ys[75];
        sprintf(ys,"$vehicule_(%d) set Y_ %f ",ind,y);

        char as[100];
        sprintf(as,"set agent_(%d) [new Agent/MyAgent]",ind);

        char ats[100];
        sprintf(ats,"$ns_ attach-agent $vehicule_(%d) $agent_(%d)",ind,ind);

        char ins[100];
        sprintf(ins,"$agent_(%d) init-agent %d %d",ind,NBRV,NBRA);


        fprintf(f,"\n\n%s\n%s\n%s\n%s\n%s\n%s\n\n",xs,ys,zs,as,ats,ins);

/*
        float t=0;

        while(t<timeSi && MOVE)
        {
            //recuper la nouvel destination
            int dest=randomDestination(i,ind);

            //gener une vitesse
            int v=qrand()%10+vitMoy;

            //calculer la periode de temps pour arriver a la destinition
            float dif=timeDestination(i,dest,v);

            if(i==dest)
            {
                printf("la voiture a %d et dest %d\n",i,dest);
                dif=1;
            }

            char s[200];

            sprintf(s,"$ns_ at %f \"$vehicule_(%d) setdest %f %f %d\"",t,ind,mapp[dest].x,mapp[dest].y,v);
            fprintf(f,"%s\n",s);


            //RESAUX
            sprintf(s,"$ns_ at %f \"$agent_(%d) init-vitesse %d\"",t,ind,v);
            fprintf(f,"%s\n",s);

                //}
            i=dest;
            t=t+dif;
         }//*/


            //GENERATION DES COMMUNICATIONS
        float t1=0;
        float t2=10;
        while(t1<timeSi)
        {
            float tt=(float)ind/(float)NBRV;
            char s[200];

            if(COMM)
            {
                sprintf(s,"$ns_ at %f \"$agent_(%d) sendVehiculeTo -1  %f\"",t1+tt,ind,t1+tt);
                fprintf(f,"%s\n",s);
            }

            if(DISS)
            {
                sprintf(s,"$ns_ at %f \"$agent_(%d) dessimination  %f\"",t2+tt,ind,t2+tt);
                fprintf(f,"%s\n",s);
            }

            t1=t1+interval;
            t2=t2+interval;
        }


            //GENERATION DES DONNES
        int ti=0;
        while(ti<600 && DONN)
        {
            char s[200];
            int inter;
            if(ti<intervalDon)            inter=0;
            else                          inter=ti+qrand()%intervalDon;
            sprintf(s,"$ns_ at %d \"$agent_(%d) init-donnees %d\"",inter,ind,inter);
            fprintf(f,"%s\n",s);
            ti=ti+intervalDon;
        }

        fclose(f);
    }
    mouvement();

}

#endif // SENARIO_H
