/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package classes;

/**
 *
 * @author rlaouadi
 */
public abstract class A<U extends C<V,T,U>,T extends B<V,U,T>, V extends A<U,T,V>> {

    String id;
    
    public A(String idd) {
        this.id=idd;
    }

    @Override
    public String toString() {
        return "type statique est "+this.id+"\t type dynamique"+this.getClass().getName();
    }
}
