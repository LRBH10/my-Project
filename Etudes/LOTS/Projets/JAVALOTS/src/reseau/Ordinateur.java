/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package reseau;

import general.Aret;
import general.Graph;
import general.Sommet;

/**
 *
 * @author BIBOUH
 */
public class Ordinateur extends Sommet{

    public Ordinateur(String name) {
        super(name+"(Ordi)");
    }

    @Override
    public boolean compatibleGraph(Graph s) {
        if(s instanceof Reseau)
            return true;
        else 
            return false;
    }

    @Override
    public boolean compatibleAret(Aret a) {
        if(a instanceof Cable)
            return true;
        else 
            return false;
    }
    
    
}
