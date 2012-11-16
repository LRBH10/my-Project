/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package general;



/**
 *
 * @author BIBOUH
 */
public abstract class Aret<U extends Graphe<U,T,V>,T extends Aret<U,T,V>, V extends Sommet<U,T,V>> {

	String name;
	Sommet<U,T,V> sommet1;
	Sommet<U,T,V> sommet2;
	Graphe<U,T,V> graphe;

	public Aret(String name) {
		this.name = name;
	};

    @Override
    public String toString() {
		// TODO Auto-generated method stub
		if (this.graphe == null && this.sommet1 == null && this.sommet2 == null)
			return "Who : " + name + " -> Type : " + getClass().getName()
					+ " -> pere : null -> Pas de Sommet";
		else if (this.sommet1 == null && this.sommet2 == null)
			return "Who : " + name + " -> Type : " + getClass().getName()
					+ " -> pere : " + graphe.name + " -> Pas de Sommet";
		else if (this.graphe == null)
			return "Who : " + name + " -> Type : " + getClass().getName()
					+ " -> pere : null -> (" + sommet1.name + ","
					+ sommet2.name + ")";
		else
			return "Who : " + name + " -> Type : " + getClass().getName()
					+ " -> pere : " + graphe.name + " -> ("
					+ sommet1.name + "," + sommet2.name + ")";
	}

    
	public String insererSommets(Sommet<U,T,V> sommet1, Sommet<U,T,V> sommet2) {
		if (sommet1 != sommet2 && sommet1.graphe==sommet2.graphe) {
			this.sommet1 = sommet1;
			this.sommet2 = sommet2;
			sommet1.insererAret(this);
			sommet2.insererAret(this);
			if(sommet1.graphe!=null) setGraphe(sommet1.graphe);
			return "OK \n " + this + "\n----------\n";
		}
		return "Non OK \n" + this + "\n" + sommet1 + "\n" + sommet2
				+ "\n----------\n";
	}

	public boolean isGrapheNull() {
		// TODO Auto-generated method stub
		return (graphe == null);
	}

	public String setGraphe(Graphe<U, T, V> graphe) {
		if(isGrapheNull() && sommet1 != null)
		{
			this.graphe = graphe;
			graphe.arets.add(this);
			return "OK \n " + this + "\n----------\n";
		}
		return "Non OK \n" + this + "\n" + graphe + "\n----------\n";
	}
}	
