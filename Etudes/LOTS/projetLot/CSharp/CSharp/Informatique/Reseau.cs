using System;using System.Text;using System.Collections;using System.Collections.Generic;using General;namespace Informatique{  public class Reseau : Graphe  {      public Reseau(String name) {
		this.name=name;
	}

	
	override public bool compatibleAret(Aret aret) {
		return (aret is Cable);
	}

	override public bool compatibleSommet(Sommet sommet) {
		return (sommet is Ordinateur);
	}
  }}  // end of namespace Informatique