#ifndef SENARIO_H
#define SENARIO_H
#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "qmath.h"
#include <stdio.h>

#define NBRA    5
#define N2      256

void MainWindow::senario()
{
    remplire();
    //Vitesse moyenne
    vitMoy=ui->VitesseMoyenne->value();

    //Nbr de vehicules
    NBRV=ui->NBRV->value();

    //redom destination
    for(int i=0;i<NBRV;i++) des[i]=qrand()%N2;

    //temps de simulation
    timeSi=ui->tempSimul->value();

    //interval de calc region
    interval=ui->interval->value();

    //interval de generation de donnees
    intervalDon=ui->intervalDon->value();

        //Inforamtion
    QMessageBox::information(this,"information","nombre de véhicules: "+QVariant(NBRV).toString()+
                             "\nVitesse Moyenne : "+QVariant(vitMoy).toString()+
                             "\nTemps de simulation : "+QVariant(timeSi).toString()+
                             "\ninterval de region : "+QVariant(interval).toString()+
                             "\n interval de donnees: "+QVariant(intervalDon).toString());

        //activer la generationde scnario
    ui->pushButton_4->setEnabled(true);
    FILE *f;
    f=fopen("wire.tcl","w");
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
        int t=1;
        while(p->s!=NULL)
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
              des[ind]=qrand()%N;

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

}

void MainWindow::createSenario()
{
    FILE *f;
    for(int ind=0;ind<NBRV;ind++)
    {
        f=fopen("vehicules.txt","a");

        int i=rand()%N2;
        float x=mapp[i].x;
        float y=mapp[i].y;

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

        ///SINEARIO DE MOVMENT DES VHICULES
        float t=0;

        while(t<timeSi)
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
        }


            //GENERATION DES COMMUNICATIONS
        float t1=0;
        float t2=10;
        while(t1<timeSi)
        {
            float tt=(float)ind/(float)NBRV;
            char s[200];
            sprintf(s,"$ns_ at %f \"$agent_(%d) sendVehiculeTo -1  %f\"",t1+tt,ind,t1+tt);
            fprintf(f,"%s\n",s);

            sprintf(s,"$ns_ at %f \"$agent_(%d) dessimination  %f\"",t2+tt,ind,t2+tt);
            fprintf(f,"%s\n",s);

            t1=t1+interval;
            t2=t2+interval;
        }


            //GENERATION DES DONNES
        int ti=0;
        while(ti<timeSi)
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
}

#endif // SENARIO_H
