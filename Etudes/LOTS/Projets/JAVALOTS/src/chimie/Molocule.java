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
public class Molocule extends Graph{

    public Molocule(String name) {
        super(name+" (Molucule)");
    }

    @Override
    public boolean compatibleSommet(Sommet s) {
        if(s instanceof Atome)
            return true;
        else 
            return false;
    }

    @Override
    public boolean compatibleAret(Aret a) {
        if(a instanceof Lien)
            return true;
        else 
            return false;
    }
    
}
