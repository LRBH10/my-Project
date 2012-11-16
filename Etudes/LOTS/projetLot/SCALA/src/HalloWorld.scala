import chimie.Atome
import chimie.Molecule
import informatique.Ordinateur
object HalloWorld {
	
  def main(args: Array[String]) {
    val at= new Atome;
    val at2= new Atome;
    val or = new Ordinateur;
    
    val mol =   new Molecule;
    
    mol.addSommet(at);
    mol.addSommet(at2);
    //
    //mol.addSommet(or);
    
    println(mol.sommets)
    
    println("Hello, world!")
    
  	}
  }






