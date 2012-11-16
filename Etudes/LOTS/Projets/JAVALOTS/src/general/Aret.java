/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//mofif
package general;

import java.util.Vector;
import javalots.JAVALOTS;
/**
 * @author BIBOUH
 */
public abstract class Aret {
    Graph pere;         //contrait q'un arret appartien a un seul graph a un moment X;
    String name;
    Sommet element1;    //La liason entre un Sommet et un aret
    Sommet element2;    //La liason entre un Sommet et un aret

    
    //Constructeur
    public  Aret( Sommet element1, Sommet element2) {
        this.element1 = element1;
        this.element2 = element2;
        this.pere = null;
        name="("+this.element1.getName()+","+this.element2.getName()+")";
    }

    public Aret() {
        this.element1=null;
        this.element2=null;
    }
    //getteres
    public String getName() {
        return name;
    }
    

    //setters
    public void setPere(Graph x){
        if(this.compatibleGraph(x)){
            pere=x;
            JAVALOTS.afficher("le pere de l'aret "+this.name+" est '"+this.pere.getName()+"'");
        }
        JAVALOTS.afficher("le Graph est non Compatible");
    }
    
    public void setElements(Sommet sommet1,Sommet sommet2){
        if(this.compatibleSommet(sommet1) && this.compatibleSommet(sommet2)){
            this.element1=sommet1;
            this.element2=sommet2;
            name="("+this.element1.getName()+","+this.element2.getName()+")";
            JAVALOTS.afficher("l'aret "+name+" est Creer");
        }
        else 
            JAVALOTS.afficher(sommet1.getName()+" ou "+sommet2.getName()+" ne sont pas "
                    + "compatible avec  "+this.getClass().getName());
    }
    
    //getters
    public Graph getGraphPere(){
        return this.pere;
    }
    public Sommet getElement1(){
        return this.element1;
    }
    public Sommet getElement2(){
        return this.element2;
    }
    
    //COMPATIBILITE
    public abstract boolean compatibleGraph(Graph s);
    public abstract boolean compatibleSommet(Sommet s);
}
