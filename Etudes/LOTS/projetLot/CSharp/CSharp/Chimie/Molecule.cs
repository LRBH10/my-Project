using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;

using General;

namespace Chimie
{

  public class Molecule : Graphe
  {
      public Molecule(String name) {
          this.name = name;
	  }


	override public bool compatibleAret(Aret aret) {
		// TODO Auto-generated method stub
		return (aret is Liaison);
	}

	override public bool compatibleSommet(Sommet sommet) {
		// TODO Auto-generated method stub
		return (sommet is Atome);
	}


  }

}  // end of namespace Chimie

