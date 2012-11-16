/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package lotesgenerisite;

import general.*;
import informatique.*;
import chimie.*;

/**
 * 
 * @author rlaouadi
 */
public class Main {

	/**
	 * @param args
	 *            the command line arguments
	 */
	static void afficher(Object o) {
		System.out.println(o);
	}

	public static void main(String[] args) {
		// TODO code application logic here
		Graphe<Reseau, Cable, Ordinateur> rzo1 = new Reseau("RZO1");
		Graphe<Reseau, Cable, Ordinateur> rzo2 = new Reseau("RZO2");
		Graphe<Molecule, Liaison, Atome> mol = new Molecule("MOL");

		afficher("les Graphes de Simulation\n" + rzo1 + "\n" + rzo2 + "\n"
				+ mol);
		// les sommets
		Sommet<Molecule, Liaison, Atome> at1 = new Atome("AT1");
		Sommet<Molecule, Liaison, Atome> at2 = new Atome("AT2");

		Sommet<Reseau, Cable, Ordinateur> or1 = new Ordinateur("OR1");
		Sommet<Reseau, Cable, Ordinateur> or2 = new Ordinateur("OR2");
		Sommet<Reseau, Cable, Ordinateur> or3 = new Ordinateur("OR3");
		Sommet<Reseau, Cable, Ordinateur> or4 = new Ordinateur("OR4");
		Sommet<Reseau, Cable, Ordinateur> or5 = new Ordinateur("OR5");

		afficher("\n----------\nles Sommets de Simulation\n" + at1 + "\n" + at2
				+ "\n" + or1 + "\n" + or2 + "\n" + or3 + "\n" + or4 + "\n"
				+ or5 + "\n");

		Aret<Molecule, Liaison, Atome> li1 = new Liaison("LI1");
		Aret<Reseau, Cable, Ordinateur> ca1 = new Cable("CA1");
		Aret<Reseau, Cable, Ordinateur> ca2 = new Cable("CA2");
		Aret<Reseau, Cable, Ordinateur> ca3 = new Cable("CA3");

		afficher("\n----------\nles Arets de Simulation\n" + li1 + "\n" + ca2
				+ "\n" + ca1 + "\n" + ca2 + "\n" + ca3 + "\n");

		afficher("SIMULATIONS\n ");
		// 2 insertion Liaison (Atome, Atome (le meme)) NOn OK
		afficher("TEST 2 \n" + li1.insererSommets(at1, at1));
		// 3 insertion Liaison (Atome, Atome) OK
		afficher("TEST 3 \n" + li1.insererSommets(at1, at2));
		// 4 insertion RZO (Ord) Ok
		afficher("TEST 4\n" + rzo1.insererSommet(or1));
		// 7 insertion CA1 (sans pere) (or1 avec (PERE), or2 Sans pere) Non OK
		afficher("TEST 7\n" + ca1.insererSommets(or1, or2));
		// 8 insertion de CA1 sans Sommets Non OK
		afficher("TEST 8\n" + rzo1.insererAret(ca1));
		// 9 insertion CA1 (Ord (pere), Ord (meme Pere)) OK
		or2.setGraphe(rzo1);
		afficher("TEST 9\n" + ca1.insererSommets(or1, or2));
		// 10 insertion RZO2 (Cable1) non OK
		afficher("TEST 10\n" + rzo2.insererAret(ca1));

	}

}
