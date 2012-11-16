using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;


namespace General
{

  public class Aret
  {

  //
	// Fields
	//
	public String name;
	public Sommet sommet1;
	public Sommet sommet2;
	public Graphe graphe;

	
	/**
	 * @return bool
	 * @param graphe
	 */
	abstract public bool compatibleGraphe(General.Graphe graphe);

	/**
	 * @return bool
	 * @param sommet
	 */
	abstract public bool compatibleSommet(General.Sommet sommet);

	/**
	 * @return bool
	 * @param graphe
	 */
	public String setGraphe(General.Graphe graphe) {
		if (this.compatibleGraphe(graphe) && graphe.compatibleAret(this)
				&& this.IsGrapheNull() && sommet1 != null) {
			this.graphe = graphe;
			graphe.arets.Add(this);
			return "OK \n " + this + "\n----------\n";
		}

		return "Non OK \n" + this + "\n" + graphe + "\n----------\n";
	}

	/**
	 * @return bool
	 * @param sommet1
	 * @param sommet2
	 */
	public String insererSommets(General.Sommet sommet1, General.Sommet sommet2) {
		if (VerifyinsererSommet(sommet1) && VerifyinsererSommet(sommet2)
				&& sommet1 != sommet2 && sommet1.graphe==sommet2.graphe) {
			this.sommet1 = sommet1;
			this.sommet2 = sommet2;
			sommet1.insererAret(this);
			sommet2.insererAret(this);
			setGraphe(sommet1.graphe);
			return "OK \n " + this + "\n----------\n";
		}
		return "Non OK \n" + this + "\n" + sommet1 + "\n" + sommet2
				+ "\n----------\n";
	}

	/**
	 * @return bool
	 */
	public bool IsGrapheNull() {
		return (graphe == null);
	}

	/**
	 * @return bool
	 * @param sommet1
	 */
	bool VerifyinsererSommet(General.Sommet sommet) {
		if (this.compatibleSommet(sommet) && sommet.compatibleAret(this))
			return true;
		return false;
	}

	public Graphe getGraphe() {
		return graphe;
	}

	override public String ToString() {
		// TODO Auto-generated method stub
		if (this.graphe == null && this.sommet1 == null && this.sommet2 == null)
			return "Who : " + name + " -> Type : " + GetType().Name
					+ " -> pere : null -> Pas de Sommet";
		else if (this.sommet1 == null && this.sommet2 == null)
            return "Who : " + name + " -> Type : " + GetType().Name
					+ " -> pere : " + graphe.name + " -> Pas de Sommet";
		else if (this.graphe == null)
            return "Who : " + name + " -> Type : " + GetType().Name
					+ " -> pere : null -> (" + sommet1.name + ","
					+ sommet2.name + ")";
		else
            return "Who : " + name + " -> Type : " + GetType().Name
					+ " -> pere : " + graphe.name + " -> ("
					+ sommet1.name + "," + sommet2.name + ")";
	}


  }

}  // end of namespace General

