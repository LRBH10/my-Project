using System;
using System.Collections.Generic;


namespace General
{

  public class Graphe
  {

   //
	// Fields
	//
      public String name;
      public List<Aret> arets = new List<Aret>();
      public List<Sommet> sommets = new List<Sommet>();

	
	
	/**
	 * @return boolean
	 * @param aret
	 */
	abstract public bool compatibleAret(General.Aret aret);

	/**
	 * @return boolean
	 * @param sommet
	 */
	abstract public bool compatibleSommet(General.Sommet sommet);

	/**
	 * @return boolean
	 * @param aret
	 */
	public String insererAret(General.Aret aret) {
		return	aret.setGraphe(this);
	}

	/**
	 * @return boolean
	 * @param sommet
	 */
	public String insererSommet(General.Sommet sommet) {
		return	sommet.setGraphe(this);
	}
	
	
	override public String ToString() {
		// TODO Auto-generated method stub
		return "Who : "+ name + " -> Type : "+this.GetType().Name;
	}


  }

}  // end of namespace General

