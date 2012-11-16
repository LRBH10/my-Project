//pour utiliser les fonction scanf et printf
#include <stdio.h>


//la fonction main
int main()
{
    //daclaration
    int C,L; //la dimension de la matrice
    int i,j; //indice de parcours de de la matrice M
    int k;   //indice de parcour de tableau V

        //toujour il faut lire L et M avant de declarer la Matrice et le vecteur
    printf("donnez la taille de la matrice L et C\n");

        //la lecture
    scanf("%d",&C);
    scanf("%d",&L);

        //declaration de la matrice
    char M[L][C];

        //declartion de tableau
    char V[L*C];//pour quoi L*C . c'est parce que la taille de tableau il faut qu'ils soit egale
                // a le nombre d'element de la matrice qui est "L*C"   (lignes*colones).

    //remplissage de la Matrice
    for(i=0;i<L;i++)
        for(j=0;j<C;j++)
        {
            printf("donnez l'element a la case (%d, %d)",i,j);
            scanf("%c",&M[i][j]);
        }

    //tronsformation
        //est de parcours la Matrice et inserer dans le tableau
    k=0;//initialisé l'indice de la matrice
    for(i=0;i<L;i++)
        for(j=0;j<C;j++)
        {
            V[k]=M[i][j];   //inser l'elemnt de la matrice dans le tableau
            k++;            //achaque insertion on augmente le k
        }


    ///*----------------------OPTIONNEL-------------//////////
    //affichage de la matrice
    printf("MATRICE\n");
    for(i=0;i<L;i++)
    {
        printf("\n");
        for(j=0;j<C;j++)    printf("%c ",M[i][j]);
    }

    //affichage de tableau
    printf("\n\n\n TABLEAU\n");
    for(k=0;k<L*C;k++)      printf("%c ",V[k]);

}
