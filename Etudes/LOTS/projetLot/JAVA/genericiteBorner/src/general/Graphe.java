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
public abstract class Graphe<U extends Graphe<U, T, V>, T extends Aret<U, T, V>, V extends Sommet<U, T, V>> {

	String name;
	ArrayList<Aret<U, T, V>> arets = new ArrayList<Aret<U, T, V>>();
	ArrayList<Sommet<U, T, V>> sommets = new ArrayList<Sommet<U, T, V>>();

	public Graphe(String name) {
		this.name = name;
	};

	public String insererAret(Aret<U, T, V> aret) {
		return aret.setGraphe(this);
	}

	public String insererSommet(Sommet<U, T, V> sommet) {
		return sommet.setGraphe(this);
	}

	public String toString() {
		// TODO Auto-generated method stub
		return "Who : " + this.name + " -> Type : " + getClass().getName();
	}
}
