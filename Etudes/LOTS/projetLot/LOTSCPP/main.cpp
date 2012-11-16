#include <iostream>

#include "General/graphe.h"
using namespace General;

using namespace std;
int main()
{
    cout << "Hello World!" << endl;

    Graphe<int,int,int> *s=new Graphe<Graphe,int,int>();
    int z=5;
    s->sommets.push_back(&z);
    *s->sommets[0]=6;
    cout << *s->sommets[0] <<endl;

    return 0;
}

