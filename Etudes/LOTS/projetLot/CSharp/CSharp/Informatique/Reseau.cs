using System;
		this.name=name;
	}

	
	override public bool compatibleAret(Aret aret) {
		return (aret is Cable);
	}

	override public bool compatibleSommet(Sommet sommet) {
		return (sommet is Ordinateur);
	}
  }