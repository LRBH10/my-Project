#ifndef RELI_H
#define RELI_H
#include "mainwindow.h"
#include "ui_mainwindow.h"
#define Taille 10000

void MainWindow::cvrtTabReli()
{
    lien=new Reli[Taille];
    int ind=0;
    for (int i=0;i<N;i++)
        for (int j=0;j<N;j++)
        {
            lien[ind].i=i;
            lien[ind].j=j;
            lien[ind].p=tab[i][j];
            lien[ind].ind=ind;
            lien[ind].s=0;
            ind++;
        }

}
void MainWindow::creReli(int src, int des)
{
    bool exist=false;
    Reli *p;
    p=&lien[src];
    while(p->s!=0 && !exist)
    {
        if(p->s->p==lien[des].p)  exist=true;
        p=p->s;
    }
    if(p->s==0 && !exist)
    {
        p->s=new Reli;
        p->s->i=lien[des].i;
        p->s->j=lien[des].j;
        p->s->ind=lien[des].ind;
        p->s->p=lien[des].p;
        p->s->s=0;
    }

}

void MainWindow::addReli(int i,int j,int ind)
{
    bool rech=true;

    int m;
    for(int k=0;k<N*N && rech;k++)
        if(lien[k].p==tab[i][j])
        {
            rech=false;
            m=k;
        }
    creReli(ind,m);
    creReli(m,ind);
}
void MainWindow::createLiens(int deb,int fin)
{
    for (int i=fin-1;i>=deb;i--)
        if(lien[i].i==0 && lien[i].j==0)
        {
            int rd=qrand()%3;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i+1,lien[i].j,i);
                else if(j==1)   addReli(lien[i].i,lien[i].j+1,i);
                else if(j==2)   addReli(lien[i].i+1,lien[i].j+1,i);
            }
        }
        else if(lien[i].i==T_-1 && lien[i].j==0)
        {
            int rd=qrand()%3;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i-1,lien[i].j,i);
                else if(j==1)   addReli(lien[i].i,lien[i].j+1,i);
                else if(j==2)   addReli(lien[i].i-1,lien[i].j+1,i);
            }
        }
        else if(lien[i].i==0 && lien[i].j==T_-1)
        {
            int rd=qrand()%3;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i+1,lien[i].j,i);
                else if(j==1)   addReli(lien[i].i,lien[i].j-1,i);
                else if(j==2)   addReli(lien[i].i+1,lien[i].j-1,i);
            }
        }
        else if(lien[i].i==T_-1 && lien[i].j==T_-1)
        {
            int rd=qrand()%3;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i-1,lien[i].j,i);
                else if(j==1)   addReli(lien[i].i,lien[i].j-1,i);
                else if(j==2)   addReli(lien[i].i-1,lien[i].j-1,i);
            }
        }
        else if(lien[i].i==0)
        {
            int rd=qrand()%5;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i,lien[i].j-1,i);
                else if(j==1)   addReli(lien[i].i+1,lien[i].j-1,i);
                else if(j==2)   addReli(lien[i].i+1,lien[i].j,i);
                else if(j==3)   addReli(lien[i].i+1,lien[i].j+1,i);
                else if(j==4)   addReli(lien[i].i,lien[i].j+1,i);
            }
        }
        else if(lien[i].i==T_-1)
        {
            int rd=qrand()%5;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i,lien[i].j-1,i);
                else if(j==1)   addReli(lien[i].i-1,lien[i].j-1,i);
                else if(j==2)   addReli(lien[i].i-1,lien[i].j,i);
                else if(j==3)   addReli(lien[i].i-1,lien[i].j+1,i);
                else if(j==4)   addReli(lien[i].i,lien[i].j+1,i);
            }
        }
        else if(lien[i].j==0)
        {
            int rd=qrand()%5;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i-1,lien[i].j,i);
                else if(j==1)   addReli(lien[i].i-1,lien[i].j+1,i);
                else if(j==2)   addReli(lien[i].i,lien[i].j+1,i);
                else if(j==3)   addReli(lien[i].i+1,lien[i].j+1,i);
                else if(j==4)   addReli(lien[i].i+1,lien[i].j,i);
            }
        }
        else if(lien[i].j==T_-1)
        {
            int rd=qrand()%5;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i-1,lien[i].j,i);
                else if(j==1)   addReli(lien[i].i-1,lien[i].j-1,i);
                else if(j==2)   addReli(lien[i].i,lien[i].j-1,i);
                else if(j==3)   addReli(lien[i].i+1,lien[i].j-1,i);
                else if(j==4)   addReli(lien[i].i+1,lien[i].j,i);
            }
        }
        else
        {
            int rd=qrand()%8;
            if (rd==0 || rd==1) rd=2;
            for(int j=0;j<=rd;j++)
            {
                if(j==0)        addReli(lien[i].i-1,lien[i].j-1,i);
                else if(j==1)   addReli(lien[i].i,lien[i].j-1,i);
                else if(j==2)   addReli(lien[i].i+1,lien[i].j-1,i);
                else if(j==3)   addReli(lien[i].i+1,lien[i].j,i);
                else if(j==4)   addReli(lien[i].i+1,lien[i].j+1,i);
                else if(j==5)   addReli(lien[i].i,lien[i].j+1,i);
                else if(j==6)   addReli(lien[i].i-1,lien[i].j+1,i);
                else if(j==7)   addReli(lien[i].i-1,lien[i].j,i);
            }
        }

}

void MainWindow::liens()
{
    this->cvrtTabReli();

    createLiens(0,N*N);

    saveImage(2);
    fichierMap();
}
#endif // RELI_H
