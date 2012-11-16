package chimie

import general.Graphe
import scala.collection.mutable.ArrayBuffer


class Molecule extends Graphe {
  type V = Atome;
  type U = Liaison;

  arets = new ArrayBuffer[U]();
  sommets = new ArrayBuffer[V]();
  
  def addSommet(sommet: V): String = {
    return sommet.setGraphe(this);
  }

  def addAret(aret: U): String = {
    return aret.setGraphe(this);
  }

}