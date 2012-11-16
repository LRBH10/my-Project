/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package TPRMIserveur;

import java.io.Serializable;
import java.util.Date;
import java.util.Vector;
/**
 *
 * @author BIBOUH
 */
public class Animal implements Serializable{
    //attribut
    private String nom;
    private String nomMaitre;
    private Espece espece;
    private Vector<Suivi> suivis;

    public Animal(){
        suivis=new Vector<Suivi>();
    }
	
    public Animal(String n,String nM,Espece es){
        nom=n;
        nomMaitre=nM;
        espece=es;
        suivis=new Vector<Suivi>();
        init_suivi();
    }

    //getters
    public String getNom(){
        return nom;
    }
    public String getNomMaitre(){
        return nomMaitre;
    }
    public Espece getNomEspece(){
        return espece;
    }
    
    //setters
    public void setNom(String nNom){
        nom=nNom;
    }
    public void setNomMaitre(String nNomMaitre){
        nomMaitre=nNomMaitre;
    }

	//METHODES
	public String getDetail() {
		// TODO Auto-generated method stub
		return nom+" "+nomMaitre+" "+espece;
	}

	public void printDetail(){
		// TODO Auto-generated method stub
		System.out.println(nom+" "+nomMaitre+" "+espece);
	}

	//SUIVI
	public Suivi getSuivi(int i){
		// TODO Auto-generated method stub
            return suivis.get(i);
	}

	
	public void setSuivi(int i, Suivi data){
		// TODO Auto-generated method stub
		if(i< suivis.size() && i>=0)	
			{
				suivis.get(i).setContenu(data.getContenu());
				suivis.get(i).setDate(data.getDate());
			}
		else System.out.println("erreur impossible Indice incoreccet");
	}
	
	public void addSuivi( Suivi data) {
		// TODO Auto-generated method stub
		suivis.add(data);
	}

        public void deleteSuivi(int i){
            if(i< suivis.size() && i>=0)	
            {
                suivis.remove(i);
            }
            else System.out.println("Index ERRONER");
        }
                
	//suivis
	public int sizeSuivi() {
		// TODO Auto-generated method stub
		return suivis.size();
	}
        
        
        //****************

    @Override
    public String toString() {
        return "Animal : "+nom+"\nMaitre : "+nomMaitre+"\n"+espece.toString();
    }

    private void init_suivi() {
        Date s=new Date(new Date().getTime());
        String str="";
        str+=s.getDate()+"-";
        str+=s.getMonth()+"-";
        str+=s.getYear()+"- (";
        str+=s.getHours()+":";
        str+=s.getMinutes()+")";
        suivis.add(new Suivi(str, "Pas de Probleme"));
    }
}
