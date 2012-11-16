package TPRMIserveur;

import java.io.Serializable;


public class Espece implements Serializable {
	//atribute
	private String nomEspece;
	private int	dureeVieMoyenne;
	
	//Constructeur
	public Espece()
	{
		nomEspece="No name";
		dureeVieMoyenne=-1;
	}
	public Espece(String nom,int dureeVie)
	{
		nomEspece=nom;
		dureeVieMoyenne=dureeVie;
	}
	
	
	//Getters
	public String getName()
	{
		return nomEspece;
	}
	public int getDureeVieMoyenne()
	{
		return dureeVieMoyenne;
	}
	
	//Setters
	public void setName(String nom)
	{
		nomEspece=nom;
	}
	public void setDureeVieMoyenne(int duree)
	{
		dureeVieMoyenne=duree;
	}

    @Override
    public String toString() {
        return "Espece "+nomEspece+"("+dureeVieMoyenne+")\n";
    }

        
}
