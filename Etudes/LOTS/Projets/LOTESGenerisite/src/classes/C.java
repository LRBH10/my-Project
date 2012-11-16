/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package classes;

/**
 *
 * @author BIBOUH
 */
public abstract class C<V extends A<U,T,V>,T extends B<V,U,T>,U extends C<V,T,U>> {

    String id;

    public C(String idd) {
        this.id=idd;
    }
    
    @Override
    public String toString() {
        return "type statique est "+this.id+"\t type dynamique"+this.getClass().getName();
    }
    
}
