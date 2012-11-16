package Special;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


import TPRMIserveur.Espece;
import java.io.Serializable;

/**
 *
 * @author BIBOUH
 */
public class EspeceProtegee extends Espece implements Serializable{
    String protection;
    public EspeceProtegee(String nom,int dureeVie){
        super(nom,dureeVie);
        protection="cette espece est protegé";        
    }
    
    //Affichage

    @Override
    public String toString() {
        return super.toString()+"\n"+protection;
    }
    
            
    
}
