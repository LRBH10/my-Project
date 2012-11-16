#ifndef SOMMET_H
#define SOMMET_H

#include <iostream>
#include <string>
#include<vector>
using namespace std;
namespace General{

//class Graphe;
//class Aret;

template <typename T, typename U,typename V>
class Sommet
{
public:
    Sommet();


    //Variables
    vector<U*> arets;
    T *graphe;//*/

};

template <typename T , typename U, typename V>
Sommet<T,U,V>::Sommet()
{
}
}
#endif // SOMMET_H
