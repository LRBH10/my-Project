package informatique
import general.Graphe
import scala.collection.mutable.ArrayBuffer

class Reseau extends Graphe{
  type V = Ordinateur;
  type U = Cable;

  arets = new ArrayBuffer[U]();
  sommets = new ArrayBuffer[V]();
  
  def addSommet(sommet: V): String = {
    return sommet.setGraphe(this);
  }

  def addAret(aret: U): String = {
    return aret.setGraphe(this);
  }

}