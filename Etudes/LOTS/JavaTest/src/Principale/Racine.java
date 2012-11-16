/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Principale;
    
/**
 *
 * @author BIBOUH
 */
public class Racine {
    //Atribut
    String id="";
    
    //Construceur
    public Racine(){
        id="RACINE";
    }
    public Racine(String str) {
        id=str;        
    }
    
    
    //getter and setters
    public String getID(){
        return id;        
    }
    public void setID(String str){
        id=str;
    }
    
    ///METHODES
    public void whoIAm(){
        System.out.println("Statique "+this.id+"->Dynamique:"+ this.getClass().getName());
    }
    
    
}
