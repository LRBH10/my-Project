#ifndef IMAGE_H
#define IMAGE_H
#include "mainwindow.h"
#include "ui_mainwindow.h"

void MainWindow::saveImage(int type_)
{
    if(!img->load("map.png")) QMessageBox::critical(this,"erreur","pas d'image dans le repertoire");
    else
    {
        ui->pushButton_2->setEnabled(true);
        if(type_==1)
        {
        for(int i=0;i<T_;i++)
            for(int j=0;j<T_;j++) img->setPixel(i,j,qRgb(255,255,255));


        for(int i=0;i<N;i++)
            for(int j=0;j<N;j++)
            {
                int x=tab[i][j].x();
                int y=tab[i][j].y();
                for(int l=-2;l<3;l++)
                    for(int k=-2;k<3;k++)
    if(x+l<2000 && x+l>-1 && y+l<2000 && y+l>-1 && x+k<2000 && x+k>-1 && y+k<2000 && y+k>-1)
        img->setPixel(x+l,y+k,qRgb(255,0,0));
            }
        }
        else if(type_==2)
        {
            for(int i=0;i<N*N;i++)
            {
                Reli *ptr_=lien[i].s;
                while(ptr_!=0)
                {
                    traceLigne(ptr_->p,lien[i].p);
                    ptr_=ptr_->s;

                }
            }
        }
    }
    img->save("map.png");
}
void MainWindow::traceLigne(QPoint src, QPoint des, QRgb couleur)
{
    int x1=src.x();
    int y1=src.y();
    int x2=des.x();
    int y2=des.y();
    int x,y;
    int Dx,Dy;
    int xincr,yincr;
    int erreur;
    int i;

    Dx = abs(x2-x1);
    Dy = abs(y2-y1);
    if(x1<x2)   xincr = 1;
    else xincr = -1;
    if(y1<y2)   yincr = 1;
    else    yincr = -1;

    x = x1;
    y = y1;
            if(Dx>Dy)
            {
                    erreur = Dx/2;
                    for(i=0;i<Dx;i++)
                    {
                            x += xincr;
                            erreur += Dy;
                            if(erreur>Dx)
                            {
                                    erreur -= Dx;
                                    y += yincr;
                            }
                            img->setPixel(x,y,couleur);
                    }
            }
            else
            {
                    erreur = Dy/2;
                    for(i=0;i<Dy;i++)
                    {
                            y += yincr;
                            erreur += Dx;

                            if(erreur>Dy)
                            {
                                    erreur -= Dy;
                                    x += xincr;
                            }
                            img->setPixel(x,y,couleur);
                    }
            }
}
#endif // IMAGE_H
