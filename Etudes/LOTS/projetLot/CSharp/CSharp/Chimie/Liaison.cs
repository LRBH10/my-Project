using System;using System.Text;using System.Collections;using System.Collections.Generic;using General;namespace Chimie{  public class Liaison : Aret  {      public Liaison(String name) {
          this.name = name;
	}

	override public bool compatibleGraphe(Graphe graphe) {
		// TODO Auto-generated method stub
		return (graphe is Molecule);
	}

	override public bool compatibleSommet(Sommet sommet) {
		// TODO Auto-generated method stub
		return (sommet is Atome);
	}
  }}  // end of namespace Chimie