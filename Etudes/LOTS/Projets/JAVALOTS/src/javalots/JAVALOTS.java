/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package javalots;

import general.*;
import chimie.*;
import reseau.*;


/**
 *
 * @author BIBOUH
 */
public class JAVALOTS {

    //aFFICHIRER
    public static void afficher(Object o){
        System.out.println(o);
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Sommet a= new Atome("a");
        Sommet b= new Atome("b");
        
        
        Lien ab=new Lien();
        ab.setElements(a, b);
        
        Molocule g1=new Molocule("G1");
        Reseau r1=new Reseau("r1");
        r1.addAret(ab);
        
        
        /*afficher(f.getClass().getName());
        f=(Sommet) s;
        afficher(f.getClass().getName());
        Atome h=(Atome) f;
        afficher(h.getClass().getName());*/
        
    }
}
