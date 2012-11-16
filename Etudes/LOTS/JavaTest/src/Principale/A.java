/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Principale;

import Types.T;

/**
 *
 * @author BIBOUH
 */
public class A extends Racine{
    public A(){
        super("A");
    }
    public A(String str){
        super(str);
    }
    
    
    void foo(T x){
        System.out.println("Source A (paramitre-> Statique: T  -> Dynamiqe "+x.getClass().getName()+")");
    }
}
