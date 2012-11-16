package informatique
import general.Sommet

class Ordinateur extends Sommet{
  type U =Cable;
  type T =Reseau ;
  
  def addAret(aret: U): String = {
    arets.+:(aret);
    return "OK\n";
  }

  def setGraphe(graphe: T): String = {
    if (isNullGraphe()) {
      this.graphe = graphe;
      graphe.sommets.append(this);
      return "OK\n";
    }
    return "NoN OK\n";
  }
}