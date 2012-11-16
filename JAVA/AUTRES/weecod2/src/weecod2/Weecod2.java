/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package weecod2;

import java.io.File;
import java.io.IOException;

/**
 *
 * @author BIBOUH
 */
public class Weecod2 {

    static String find(String dir, String filename) throws IOException {
        String ret=null;
        File endroi = new File(dir);
        if(!endroi.exists())    
            return null;
        else{
            for(File prochain: endroi.listFiles())
            {
                if(prochain.isDirectory()){
                    //System.out.println(prochain.getName()+"(Directory)");
                    String inter=find(prochain.getAbsolutePath(),filename);
                    if(inter != null )    ret=inter;    
                }
                    
                else if(prochain.getName().equals(filename)){
                    ret=prochain.getAbsolutePath();
                }
            }
        }
        
        return ret;
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        System.out.println(find("C:/Users/BIBOUH/Qt/Test/", "main.xt"));
        //if(f.isFile())  System.out.println("bb");
    }
}
