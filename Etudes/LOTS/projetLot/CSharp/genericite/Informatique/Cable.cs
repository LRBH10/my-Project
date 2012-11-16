using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;

using General;

namespace Informatique
{

  public class Cable : Aret
  {
      public Cable(String name) {
		this.name=name;
	}

	override public bool compatibleGraphe(Graphe graphe) {
		return (graphe is Reseau);
	}

	override public bool compatibleSommet(Sommet sommet) {
		return (sommet is Ordinateur);
	}


  }

}  // end of namespace Informatique

