using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;

using General;

namespace Chimie
{

  public class Atome : Sommet
  {

    public Atome(String name) {
		// super(name + "(Atome)");
       this.name = name;
	}

	override public bool compatibleGraphe(Graphe graphe) {
		// TODO Auto-generated method stub
		return (graphe is Molecule);
	}

	override public bool compatibleAret(Aret aret) {
		// TODO Auto-generated method stub
		return (aret is Liaison);
	}


  }

}  // end of namespace Chimie

