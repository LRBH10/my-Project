/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package lotesgenerisite;
import classes.*;
import chimie.*;
//import Reseau.*;
/**
 *
 * @author rlaouadi
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        /*A<AA,BB> a=new A("A");
        System.out.println(a);*/
        
        A<CC,BB,AA> a = new AA("A");
        //B<AA,CC,BB> b = new BB("B");        
        C<AA,BB,CC> c = new CC("C");
        //AA aa =new AA("A");
        System.out.println(a);
        //System.out.println(b);
        System.out.println(c);
       

        /*AA aa =new AA("AA");
        System.out.println(aa);*/

        /*BBB bbb=new BBB("BBB");
        System.out.println(bbb);*/
    }

}
