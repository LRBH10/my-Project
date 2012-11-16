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
public class B extends A{
    public B(){
        super("B");
    }
    public B(String str){
        super(str);
    }
    
    void foo(T x){
        System.out.println("Source A (paramitre-> Statique: T  -> Dynamiqe "+x.getClass().getName()+")");
    }
    
}
