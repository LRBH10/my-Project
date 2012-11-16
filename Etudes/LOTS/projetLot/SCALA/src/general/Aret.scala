package general
//T Graphe //U Aret  //V Sommet
abstract class Aret {
  type V <: Sommet;
  type T <: Graphe;
  
  
  var name: String      = "Aret";
  
  var graphe:  T = _;
  var sommet1: V = _;
  var sommet2: V = _;

  /*
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
      return "OK\n";
    }
    return "Non Ok\n";
  }
*/
  def isNullGraphe(): Boolean = {
    return (graphe == null);
  }

}