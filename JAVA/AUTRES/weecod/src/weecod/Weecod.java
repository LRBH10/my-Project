/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package weecod;

/**
 *
 * @author BIBOUH
 */
public class Weecod {
    
   
    static double plusProcheDeZero(double[] ts) {
        double nbrProche=999999.00;
        boolean isPosi=false;
        int indexProche=0;
        
        if(ts.length==0)    return 0;
        
        for(int i=0;i<ts.length;i++){
            double inter = ts[i];
            double abs= Math.abs(inter);
            if(abs<nbrProche){
                indexProche=i;
                nbrProche=abs;
                isPosi=isPositif(inter);
            }
            else if(abs==nbrProche && !isPosi && isPositif(inter)){
                nbrProche=abs;
                indexProche=i;
                isPosi=isPositif(inter);
            }                
        }
        return ts[indexProche];
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        double ts[]={0.5,5,8,-2,-0.5};
        System.out.println(plusProcheDeZero(ts));
    }

    private static boolean isPositif(double inter) {
        if(inter>=0)    return true;
        else return false;
    }
}
