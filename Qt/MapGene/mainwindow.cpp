#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "senario.h"
#include "Reli.h"
#include "image.h"
#include "stdio.h"


MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    img=new QImage();
    ui->setupUi(this);
    ui->tabWidget->setTabText(0,"generer une map");
    ui->tabWidget->setTabText(1,"generer une simulation");


    setCentralWidget(ui->tabWidget);

    MOVE=true;
    COMM=true;
    DONN=true;
    DISS=true;

    setWindowTitle("Notre générateur de Simulation");


}

MainWindow::~MainWindow()
{
    delete ui;
}

void MainWindow::generer()
{
    T_=ui->TAILLE->value();
    int dmoy=ui->MOY->value();
    int n=int((float)T_/(float)dmoy);
    N=n;
    for(int i=0;i<n;i++)
            for(int j=0;j<n;j++)
            {
                tab[i][j].setX(i*dmoy+qrand()%(dmoy-5));
                tab[i][j].setY(j*dmoy+qrand()%(dmoy-5));

            }
    ui->nbrPoint->setValue(N*N);
    saveImage(1);

}

void MainWindow::fichierMap()
{

    f=fopen("map.txt","w");
    for(int i=0;i<N*N;i++)
    {
        int t=1;
        Reli *ptr_=lien[i].s;
        while(ptr_!=0)
        {
            t++;
            ptr_=ptr_->s;
        }
        fprintf(f,"%d  %d %d %d\t\t",t,lien[i].ind,lien[i].p.x(),lien[i].p.y());
        ptr_=lien[i].s;
        for(int m=1;m<t;m++)
        {
            fprintf(f,"%d %d %d\t\t",ptr_->ind,ptr_->p.x(),ptr_->p.y());
            ptr_=ptr_->s;
        }
        fprintf(f,"\n");
    }
    fclose(f);
}


