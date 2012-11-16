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
public class Atome extends Sommet {

    public Atome(String name) {
        super(name+" (Atome)");
    }

    @Override
    public boolean compatibleGraph(Graph s) {
        if(s instanceof Molocule)
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
