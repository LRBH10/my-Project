package Singleton;

import Composite.DisqueDur;

public class DisqueDurSingleton extends DisqueDur
{

   private final static int max = 2;
   private static int nbr = 0;

   private DisqueDurSingleton (String name, double prix )
   {
      super (name, prix);
   }

   public static DisqueDurSingleton getInstance (String name, double prix)
   {
      if (nbr < max) {
         nbr++;
         return new DisqueDurSingleton (name, prix);
      }
      else
         return null;
   }
   
   
}
