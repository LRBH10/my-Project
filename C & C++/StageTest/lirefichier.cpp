
#include "LireFichier.h"
#include <iostream>
#include <string>
#include <fstream>

using namespace std;

/**
 * \brief Constuctuer de LireFichier.
 * \param filename le nom de fichier a charger.
 **/

LireFichier::LireFichier(const char *filename)
{
    //initialisation
    source =new ifstream(filename, ios::in);
    tree= new ArbreStage<string>();

    //le pere suppreme
    if(*source)
    {
        string pere;
        if(getline(*source, pere))
        {
            if(tree->estVide()){
                getCorps(pere);
                tree->ajouterPereSupereme(pere.c_str());
           }
        }
        lireFichierRe(pere);
    }
    else
        std::cout << "aucun Fichier Disponible"<<std::endl;
}


/**
 * \brief Permet de parcourir et charger le fichier dans l'arbre
 * \param pere c'est la chaine qui represente le  sous arbre qui va contenir le fils.
 **/

void LireFichier::lireFichierRe(string pereEncours)
{
    string prochaineligne;
    bool finBranche=false;
    while(!finBranche)
    {
        if(getline(*source, prochaineligne))
        {
            if(isPere(prochaineligne))
            {
                getCorps(prochaineligne);
                tree->ajouterFils(pereEncours.c_str(),prochaineligne.c_str());
                lireFichierRe(prochaineligne);
            }
            else if(isFeuille(prochaineligne))
            {
                getCorps(prochaineligne);
                tree->ajouterFils(pereEncours.c_str(),prochaineligne.c_str());
            }
            else if(isFinBrance(prochaineligne))
            {
                finBranche = true;
            }
        }
        else
        {
            tree->~ArbreStage();
            finBranche =true;
            cout<< "fin de fichier innatendu"<<endl << "VOTRE FICHIER n'est PAS BIEN FORMER"<<endl;
        }
    }
}


/**
 * \brief indique si une string est un pere ou pas
 * \param s represente la chaine a analyser
 * \return true si s est un pere, false sinon.
 **/
bool LireFichier::isPere(string s)
{
    if(getDebut(s)=='#' && getfin(s)=='>')  return true;
    else return false;
}


/**
 * \brief indique si une string est un feuille ou pas
 * \param s represente la chaine a analyser
 * \return true si s est un feuille, false sinon.
 **/
bool LireFichier::isFeuille(std::string s)
{
    if(getDebut(s)=='#' && getfin(s)==';')  return true;
    else return false;
}

/**
 * \brief indique si une string est un fin de branche ou pas
 * \param s represente la chaine a analyser
 * \return true si s est un fin de branch, false sinon.
 **/

bool LireFichier::isFinBrance(string s)
{
    if(s.compare("\;"))  return true;
    else return false;
}

/**
 * \brief recupere le premier caractaire de la chaine
 * \param s represente la chaine
 * \return le premier caractaire.
 **/
char LireFichier::getDebut(std::string s)
{
    return s.at(0);
}

/**
 * \brief recupere le dernier caractaire de la chaine
 * \param s represente la chaine
 * \return le dernier caractaire.
 **/
char LireFichier::getfin(std::string s)
{
    return s.at(s.length()-1);
}

/**
 * \brief supprimer le premier caractaire de la chaine
 * \param s represente la chaine
 **/
void LireFichier::rmDebut(std::string &s)
{
    s.erase(0,1);
}

/**
 * \brief supprimer le dernier caractaire de la chaine
 * \param s represente la chaine
 **/
void LireFichier::rmFin(std::string &s)
{
    s.erase(s.length()-1,s.length());
}

/**
 * \brief permet de recuperer le corps example #Velo; => Velo
 * \param s represente la chaine
 **/

void LireFichier::getCorps(std::string &s)
{
    if(isFeuille(s) || isPere(s))
    {
        rmDebut(s);
        rmFin(s);
    }
}

/**
 * \brief affichage de resultat
 **/

void LireFichier::afficher()
{
    this->tree->afficher();
}

/**
 * \brief destructeur
 **/

LireFichier::~LireFichier()
{
    this->tree->~ArbreStage();
    this->source->close();
}
