using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;

using General;

namespace Informatique
{

  public class Ordinateur : Sommet
  {
      public Ordinateur(String name) {
		this.name=name;
	}

	override public bool compatibleGraphe(Graphe graphe) {
		return (graphe is Reseau);
	}

	override public bool compatibleAret(Aret aret) {
		return (aret is Cable);
	}
  }

}  // end of namespace Informatique

