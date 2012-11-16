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
public class Reseau extends Graph{

    public Reseau(String name) {
        super(name+"(Reseau)");
    }

    @Override
    public boolean compatibleSommet(Sommet s) {
       if(s instanceof Ordinateur)
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
