package general

abstract class Sommet {
  type U <: Aret;
  type T <: Graphe;
  
  
  
  var name: String = "Aret";
  var graphe: T = _;
  var arets: Array[U]=_;

  /*def addAret(aret: U): String = {
    arets.+:(aret);
    return "OK\n";
  }

  def setGraphe(graphe: T): String = {
    if (isNullGraphe()) {
      this.graphe = graphe;
      return "OK\n";
    }
    return "NoN OK\n";
  }
*/
  def isNullGraphe(): Boolean = {
    return (graphe == null);
  }

}