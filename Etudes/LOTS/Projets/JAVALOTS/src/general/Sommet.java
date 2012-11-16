/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package general;

import java.util.Vector;
import javalots.JAVALOTS;

/**
 *
 * @author BIBOUH
 */
public abstract class Sommet {
    Graph pere;             //Contraint qu'un node n'appartien qu'un seul pere
    Vector<Aret> arets;     //la association entre Aret et Sommet
    String name;
    //Construceur

    public Sommet(String name) {
        this.name=name;
        arets=new Vector<>();
        pere=null;
    }
    
    //setters
    public void setName(String name) {
        this.name = name;
    }
    
    public void setPere(Graph pere) {
        if(this.compatibleGraph(pere)){
            this.pere = pere;
            JAVALOTS.afficher("le pere de noued '"+this.name+"' est '"+pere.getName()+"'");
        }
        else System.out.println("Non compztible");
    }
    
    //getters
    public String getName() {
        return this.name;
    }

    public Graph getPere() {
        return this.pere;
    }
    
    //Ajouter d'un arc
    public void addAret(Aret aret){
        if(pere.compatibleAret(aret))
            arets.add(aret);
        else
            System.out.println("Non compatible");
    }
    
    //delete Arret
    public void deleteAtet(int index){
        arets.remove(index);
    }
    
    
    //LES FONCTION COMPATIBILIT2
    public abstract boolean compatibleGraph(Graph s);
    public abstract boolean compatibleAret(Aret a);
}
