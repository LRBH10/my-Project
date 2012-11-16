package Singleton;

import java.util.ArrayList;
import java.util.List;

import Composite.MontageComposite;

public abstract class SimpleSingloton extends MontageComposite
{

   protected double prix;
   protected double tva = 0.17;

   public static List<Pair> objects = new ArrayList<Pair> ();

   public static void init ()
   {
      objects.add (new Pair (RamSingleton.class.getName (), 2));
   }

   public static void addObjet (Class<?> c, int max)
   {
      objects.add (new Pair (c.getName (), 2));
   }

   public static SimpleSingloton getInstance (Class<?> c, String name, double prix) throws InstantiationException, IllegalAccessException
   {
      System.out.println (c.getName ());
      System.out.println (objects.get (0).className);

      for (int i = 0; i < objects.size (); i++)
         if (objects.get (i).className.equals (c.getName ()))
            if (objects.get (i).min < objects.get (i).max) {
               objects.get (i).min++;

               SimpleSingloton inter = (SimpleSingloton) c.newInstance ();
               inter.name = name;
               inter.prix = prix;

               return inter;
            }

      return null;
   }

   protected SimpleSingloton ()
   {
      // TODO Auto-generated constructor stub
   }

   public double getPrix ()
   {
      return prix;
   }

   public void setPrix (double prix)
   {
      this.prix = prix;
   }

   @Override
   public double PrixTTC ()
   {
      return prix * tva;
   }

   @Override
   public String toString ()
   {
      // TODO Auto-generated method stub
      return super.toString () + "\t prix : " + prix + "\t TVA : " + tva;
   }
}
