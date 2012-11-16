package chimie


import general.Sommet

class Atome extends Sommet {
  type U =Liaison;
  type T =Molecule ;
  
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