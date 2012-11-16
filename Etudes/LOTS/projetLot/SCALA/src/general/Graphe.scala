package general
import scala.collection.mutable.ArrayBuffer

abstract class Graphe {
  type V <: Sommet;
  type U <: Aret;
  
  
  
  var name: String      = "Graphe";
  var arets :  ArrayBuffer[U] = _  ;
  var sommets: ArrayBuffer[V] = _;

 /* def addSommet(sommet: V): String = {
    return sommet.setGraphe(this);
  }

  def addAret(aret: U): String = {
    return aret.setGraphe(this);
  }*/


}