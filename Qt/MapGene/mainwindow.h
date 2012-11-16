#ifndef MAINWINDOW_H
#define MAINWINDOW_H

#include <QMainWindow>
#include <QImage>
#include <QMessageBox>
#include <QPainter>
#include <QTime>
#include <QVBoxLayout>



struct positionV
{
    int indsrc;
    int inddst;
    int vitesse;
    float time;
};

struct Reli
{
    QPoint p;
    int i;
    int j;
    int ind;
    Reli *s;
};
struct Reli1
{
        float x;
        float y;
        int ind;

        Reli1 *s;
};


namespace Ui {
    class MainWindow;
}

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindow(QWidget *parent = 0);
    ~MainWindow();
    void cvrtTabReli();
    void saveImage(int type_);
    void addReli(int i,int j,int ind);
    void creReli(int src,int dest);
    void traceLigne(QPoint src,QPoint dest,QRgb couleur = qRgb(0,0,255));
    void fichierMap();
    void createLiens(int deb,int fin);

    //SENARIO
    void remplire();
    int randomDestination(int i,int ind);
    float timeDestination(int src,int dest,int vit);
    float distance(int src,int des);
    int taille(Reli1 *p);
    void mouvement();


public slots:
    void generer();
    void liens();
    void senario();
    void createSenario();



private:
    int T_;
    QPoint tab[200][200];
    Reli *lien;
    int N;
    Ui::MainWindow *ui;
    QImage *img;
    QTime temps;
    FILE *f;
    Reli1 mapp[500];
    int des[500];
    int vitMoy;
    int NBRV;
    int NBRA;
    int timeSi;
    int interval;
    int intervalDon;
    bool MOVE;
    bool COMM;
    bool DONN;
    bool DISS;
    positionV voiture[500];
    int indice0V[500];

};

#endif // MAINWINDOW_H
