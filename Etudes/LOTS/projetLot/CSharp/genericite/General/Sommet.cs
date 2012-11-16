using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;


namespace General
{

  public abstract class Sommet
  {

   //
	// Fields
	//
	public String name;
    public List<Aret> arets = new List<Aret>();
    public Graphe graphe;


	
	/**
	 * @return bool
	 * @param graphe
	 */
	abstract public bool compatibleGraphe(General.Graphe graphe);

	/**
	 * @return bool
	 * @param aret
	 */
	abstract public bool compatibleAret(General.Aret aret);

	/**
	 * @return bool
	 * @param graphe
	 */
	public String setGraphe(General.Graphe graphe) {
		if (this.compatibleGraphe(graphe) && graphe.compatibleSommet(this)
				&& this.IsGrapheNull()) {
			this.graphe = graphe;
			graphe.sommets.Add(this);
			return "OK \n " + this + "\n----------\n";
		}
		return "Non OK \n " + this +"\n"+ graphe + "\n----------\n";
	}

	/**
	 * @return bool
	 * @param aret
	 */
	public bool insererAret(General.Aret aret) {
		if (this.compatibleAret(aret) && aret.compatibleSommet(this)
				&& graphe == aret.getGraphe()) {
			this.arets.Add(aret);
			return true;
		}
		return false;

	}

	/**
	 * @return bool
	 */
	public bool IsGrapheNull() {
		return (graphe == null);
	}
	

	public Graphe getGraphe() {
		return graphe;
	}
	
	override  public String ToString() {
		// TODO Auto-generated method stub

		if (graphe == null)
			return "Who : " + name + " -> Type : " + GetType().Name
					+ " -> pere : null";
		else
            return "Who : " + name + " -> Type : " + GetType().Name
					+ " -> pere : " + graphe.name;
	}

	

  }

}  // end of namespace General

