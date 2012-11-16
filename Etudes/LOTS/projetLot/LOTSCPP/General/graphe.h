#ifndef GRAPHE_H
#define GRAPHE_H
#include <iostream>
#include <string>
#include<vector>
using namespace std;


namespace General{

//class Aret;
//class Sommet;

template <typename T, typename U, typename V>
class Graphe
{
public:
    Graphe();

//variables
    std::vector <U*>  arets;
    std::vector <V*> sommets;//*/
};

template <typename T , typename U, typename V>
Graphe<T,U,V>::Graphe()
{
}

}

#endif // GRAPHE_H
