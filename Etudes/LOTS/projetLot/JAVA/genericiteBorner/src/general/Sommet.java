/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package general;

import java.util.ArrayList;

/**
 *
 * @author rlaouadi
 */
public abstract class  Sommet<U extends Graphe<U,T,V>,T extends Aret<U,T,V>, V extends Sommet<U,T,V>> {


	String name;
	ArrayList<Aret<U,T,V>> arets = new ArrayList<Aret<U,T,V>>();
	Graphe<U,T,V> graphe;

	public Sommet(String name) {
		this.name = name;
	};
    
	public String setGraphe(Graphe<U, T, V> graphe) {
		if(isGrapheNull())
		{
			this.graphe = graphe;
			graphe.sommets.add(this);
			return "OK \n " + this + "\n----------\n";
		}
		return "Non OK \n " + this +"\n"+ graphe + "\n----------\n";
	}
	
	public boolean insererAret(Aret<U,T,V> aret) {
		if (graphe == aret.graphe) {
			this.arets.add(aret);
			return true;
		}
		return false;

	}

	
	
	
	public boolean isGrapheNull() {
		// TODO Auto-generated method stub
		return (graphe == null);
	}

	public String toString() {
		// TODO Auto-generated method stub

		if (graphe == null)
			return "Who : " + name + " -> Type : " + getClass().getName()
					+ " -> pere : null";
		else
			return "Who : " + name + " -> Type : " + getClass().getName()
					+ " -> pere : " + graphe.name;
	}

    
    
}
