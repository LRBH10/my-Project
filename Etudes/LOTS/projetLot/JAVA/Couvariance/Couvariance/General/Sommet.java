package General;import java.util.ArrayList;abstract public class Sommet {	//	// Fields	//	String name;	ArrayList<Aret> arets = new ArrayList<Aret>();	Graphe graphe;	public Sommet(String name) {		this.name = name;	};	//	// Methods	//	//	// Accessor methods	//	//	// Other methods	//	/**	 * @return boolean	 * @param graphe	 */	abstract public boolean compatibleGraphe(General.Graphe graphe);	/**	 * @return boolean	 * @param aret	 */	abstract public boolean compatibleAret(General.Aret aret);	/**	 * @return boolean	 * @param graphe	 */	public String setGraphe(General.Graphe graphe) {		if (this.compatibleGraphe(graphe) && graphe.compatibleSommet(this)				&& this.IsGrapheNull()) {			this.graphe = graphe;			graphe.sommets.add(this);			return "OK \n " + this + "\n----------\n";		}		return "Non OK \n " + this +"\n"+ graphe + "\n----------\n";	}	/**	 * @return boolean	 * @param aret	 */	public boolean insererAret(General.Aret aret) {		if (this.compatibleAret(aret) && aret.compatibleSommet(this)				&& graphe == aret.getGraphe()) {			this.arets.add(aret);			return true;		}		return false;	}	/**	 * @return boolean	 */	public boolean IsGrapheNull() {		return (graphe == null);	}		public Graphe getGraphe() {		return graphe;	}		@Override	public String toString() {		// TODO Auto-generated method stub		if (graphe == null)			return "Who : " + name + " -> Type : " + getClass().getName()					+ " -> pere : null";		else			return "Who : " + name + " -> Type : " + getClass().getName()					+ " -> pere : " + graphe.name;	}	}