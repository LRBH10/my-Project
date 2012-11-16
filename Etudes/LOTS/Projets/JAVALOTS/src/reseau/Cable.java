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
public class Cable extends Aret{

    public Cable() {
        super();
    }

    @Override
    public boolean compatibleGraph(Graph s) {
        if(s instanceof Reseau)
            return true;
        else 
            return false;
        
    }

    @Override
    public boolean compatibleSommet(Sommet s) {
        if(s instanceof Ordinateur)
            return true;
        else 
            return false;
    }
    
    
    
}
