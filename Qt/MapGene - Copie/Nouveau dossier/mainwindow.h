#ifndef MAINWINDOW_H
#define MAINWINDOW_H

#include <QMainWindow>
#include <QImage>
#include <QMessageBox>
#include <QPainter>

#define T_  2000


struct Reli
{
    QPoint p;
    int i;
    int j;
    int ind;
    Reli *s;
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
    void creReli(int src,int des);
    void traceLigne(QPoint src,QPoint des,QRgb couleur = qRgb(0,0,255));
    void fichierMap();


public slots:
    void generer();
    void liens();



private:
    QPoint tab[200][200];
    Reli *lien;
    int N;
    Ui::MainWindow *ui;
    QImage *img;
};

#endif // MAINWINDOW_H
