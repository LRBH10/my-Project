/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package chimie;
import general.*;
/**
 *
 * @author BIBOUH
 */
public class Lien extends Aret{

    public Lien() {
        super();
    }
    
    
    //COMPATIBILITE
    public boolean compatibleGraph(Graph s){
        if(s instanceof Molocule)
            return true;
        return false;
    }
    
    public boolean compatibleSommet(Sommet s){
        if(s instanceof Atome)
            return true;
        return false;
    }
}
