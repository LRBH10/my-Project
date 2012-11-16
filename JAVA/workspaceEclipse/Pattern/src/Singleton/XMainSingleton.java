package Singleton;

import java.util.ArrayList;
import java.util.List;

public class XMainSingleton
{

   /**
    * @param args
    * @throws IllegalAccessException 
    * @throws InstantiationException 
    */
   public static void main (String[] args) throws InstantiationException, IllegalAccessException
   {
      // TODO Auto-generated method stub
      List<DisqueDurSingleton> lst=new ArrayList<DisqueDurSingleton> ();
      lst.add (DisqueDurSingleton.getInstance ("DD 2",150));
      lst.add (DisqueDurSingleton.getInstance ("DD 2",150));
      lst.add (DisqueDurSingleton.getInstance ("DD 2",150));
      lst.add (DisqueDurSingleton.getInstance ("DD 2",150));
      System.out.println(lst+"\n");
      
      
      SimpleSingloton.init ();
      
      List<SimpleSingloton> lst2=new ArrayList<SimpleSingloton> ();
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      
      
      
      lst2.add ((RamSingleton) SimpleSingloton.getInstance (RamSingleton.class, "CD R1", 150));
      lst2.add ((RamSingleton) SimpleSingloton.getInstance (RamSingleton.class, "CD R1", 150));
      
      SimpleSingloton.addObjet (CDRomSingleton.class, 2);
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      lst2.add ((CDRomSingleton) SimpleSingloton.getInstance (CDRomSingleton.class, "CD R1", 150));
      
      
      System.out.println(lst2);
      
      
      
      
      
   }

}
