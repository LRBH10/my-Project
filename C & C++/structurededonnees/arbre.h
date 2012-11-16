#ifndef ARBRE_RBH
#define ARBRE_RBH

#include "list.h"
#define FILS_MAX    20

struct _arbre
{
    int node;
    int size;
    struct _arbre *fils[FILS_MAX];
};
typedef struct _arbre arbre;

/*******************/
/*FONCTION DANS Ce FICHIER*/
void arbre_add_pere(arbre **arbre, int node);
void arbre_add_fils(arbre *arbre,int pere,int fils);
void arbre_affiche(arbre *arbre);
void arbre_detruire(arbre **arbre);
void arbre_delete_fils(arbre *arbre,int node);
void arbre_moins_list(arbre *arbre,list *liste);
void arbre_to_list(list **liste,arbre *arbre);
void arbre_to_list_sauf(list **liste,arbre *arbre,int val);
void arbre_to_list_fils(list **liste,arbre *arbre);
void arbre_copy_fils(arbre *arbre, arbre *arbreFils,int pere);
int arbre_recherche(arbre *arbre,int node);
void arbre_get_fils(list **liste, arbre *arbre,int pere);
#endif // ARBRE_RBH
