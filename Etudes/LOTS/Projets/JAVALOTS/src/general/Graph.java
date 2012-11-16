/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package general;
import javalots.JAVALOTS;

import java.util.Vector;

/**
 *
 * @author BIBOUH
 */
public abstract class Graph {
    String name;
    Vector<Sommet> sommets;     ///assoctiaons entre Graph et Arrets
    Vector<Aret> arets;         //assocition entre Graph et Arrets
    
    //Constructur
    public Graph(String name) {
        this.name=name;
        this.sommets =new Vector<>();
        this.arets = new Vector<>();
    }
    
    
    
    //getters
    public String getName() {
        return name;
    }
    
    
    
    //AJOUTE
    //Ajoute dun sommet
    public void addSommet(Sommet sommet) {
        if(this.compatibleSommet(sommet)){
        if(sommet.getPere()==null){
            sommets.add(sommet);
            sommet.setPere(this);
        }            
        else
            JAVALOTS.afficher("le sommet est deja pris par un autre graph");
        }
        else
            JAVALOTS.afficher("le "+sommet+" n'est pas compatible "+this.getClass().getName());
            
    }
    
    //ajouter un Aret
    public void addAret(Aret aret){
        if(this.compatibleAret(aret)){
        if(aret.getGraphPere()==null){
            if(sommets.contains(aret.getElement1()) && sommets.contains(aret.element2)){
                arets.add(aret);
                aret.setPere(this);
            }
            else if(!sommets.contains(aret.getElement1()) && sommets.contains(aret.getElement2())){
                if(aret.getElement1().getPere()==null){
                    addSommet(aret.getElement1());
                    addAret(aret);
                }
                else
                    JAVALOTS.afficher("le sommet '"+aret.getElement1().getName()+"' appartient a un autre graphe ("+aret.getElement1().getPere().getName()+")");
                
            }
            else if(!sommets.contains(aret.getElement2()) && sommets.contains(aret.getElement1())){
                if(aret.getElement2().getPere()==null){
                    addSommet(aret.getElement2());
                    addAret(aret);
                }
            else
                    JAVALOTS.afficher("le sommet '"+aret.getElement2().getName()+"' appartient a un autre graphe ("+aret.getElement2().getPere().getName()+")");
            }
            else if(!sommets.contains(aret.getElement2()) && !sommets.contains(aret.getElement1())){
                if(aret.getElement1().getPere()==null && aret.getElement2().getPere()==null){
                    addSommet(aret.getElement1());
                    addSommet(aret.getElement2());
                    addAret(aret);
                }
                else{
                    JAVALOTS.afficher("les deux sommet "+aret.getName()+" appartiennent au d'autre graph");
                }
                    
            }
                
        }
        else
            JAVALOTS.afficher("l'aret est deja pris par un autre graph");
        }
        else
            JAVALOTS.afficher("l'aret "+aret.getName()+" n'est pas compatible avec "+this.getClass().getName());
    }
    
    
    //SUPPRISSION
    //supprimer un sommet
    public void deleteSommet(int index){
        sommets.remove(index);
    }
    
    //supprimer un aret
    public void deleteAret(int index){
        arets.remove(index);
    }
    
    ///COMPATIBILITES
    public abstract boolean compatibleSommet(Sommet s);
    
    public abstract boolean compatibleAret(Aret a);
    
    
    
}
