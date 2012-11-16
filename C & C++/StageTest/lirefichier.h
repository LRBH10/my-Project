#ifndef LIREFICHIER_H
#define LIREFICHIER_H
#include "arbreteststage.h"
class LireFichier
{

public:
    LireFichier(const char *filename);
    ~LireFichier();
    void afficher();

private :
    void lireFichierRe(std::string pereEncours);

    bool isPere(std::string ligne);
    bool isFeuille(std::string ligne);
    bool isFinBrance(std::string ligne);
    void getCorps(std::string &ligne);


    char getDebut(std::string chaine);
    char getfin(std::string chaine);

    void rmDebut(std::string &chaine);
    void rmFin(std::string &chaine);

    std::ifstream *source;
    ArbreStage<std::string> *tree;
};

#endif // LIREFICHIER_H
