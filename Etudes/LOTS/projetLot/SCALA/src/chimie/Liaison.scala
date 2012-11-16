package chimie

import general.Aret

class Liaison extends Aret {
  type V = Atome;
  type T = Molecule;
   
  def addSommets(sot1: V, sot2: V): String = {
    if(sot1.graphe==sot2.graphe )
    {
      sommet1 = sot1;
      sommet2 = sot2;
      setGraphe(sot1.graphe);
      return "OK\n";
    }
    return "Non OK\n";
  }

  def setGraphe(graphe: T): String = {
    if(sommet1 != null && sommet1.graphe == graphe)
    {
      this.graphe=graphe;
      graphe.arets.append(this)
      return "OK\n";
    }
    return "Non Ok\n";
  }

 
}