/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package javatest;

import Principale.Racine;
import Principale.A;
import Principale.B;

/**
 *
 * @author BIBOUH
 */
public class JavaTest {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Racine test1=new Racine("Racine");
        test1.whoIAm();
        
        
        ///TEST2
        A test2=new B("A");//parce que test1 est de type RAcine
        test2.whoIAm();
        
        //TEST3  
        /*B test3=new A("B");  ///IMPOSSIBLE
        test3.whoIAm();//*/
        
        
        
        
        
        
    }
}
