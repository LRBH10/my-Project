/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package weecod3;

import java.io.IOException;
import java.util.Vector;

/**
 *
 * @author BIBOUH
 */
class Solution {
    
    static long getNbrBaie(long val, int bi){
        long nbr=(val-(val % bi))/bi;
        return nbr;
    }
    // ne pas modifier la signature de cette méthode
    static Monnaie monnaieOptimale(long s) {
        if(s<=1)    return null;
        
        Monnaie ret=new Monnaie();
        long nbrBaie10=0;
        long nbrBaie5=0;
        long nbrBaie2=0;
        
        //cas de nombre de bais exact sur 10
        if(s>=10){
            nbrBaie10=getNbrBaie(s, 10);
            s=s-(nbrBaie10*10);
        }
        
        if(s==0){
            ret.billet10=nbrBaie10;
            ret.billet5=0;
            ret.piece2=0;
            return ret;
        }
        //cas inferieur a 10
        else if(s==3 || s==1){
                return null;
        }
           
        else if(s % 5 == 0){
            ret.billet10=nbrBaie10;
            ret.billet5=1;
            ret.piece2=0;
        }
        else if(s % 2 == 0){
            ret.billet10=nbrBaie10;
            nbrBaie2=getNbrBaie(s, 2);
            ret.piece2=nbrBaie2;
        }
        else {
            ret.billet10=nbrBaie10;
            ret.billet5=getNbrBaie(s, 5);
            s=s-(nbrBaie5 * 5);
            ret.piece2=getNbrBaie(s, 2);
        }
        return ret;
    }
    
     public static void main(String[] args) {
        // TODO code application logic here
        System.out.println(monnaieOptimale(101)); 
     }
}