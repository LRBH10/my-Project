#include <QtCore/QCoreApplication>
#include "arbreteststage.h"
#include "lirefichier.h"

int main(int argc, char *argv[])
{
    QCoreApplication a(argc, argv);

    LireFichier *ss =new LireFichier("script.txt");
    ss->afficher();

    return a.exec();
}
