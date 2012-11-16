package Composite;

import java.util.ArrayList;
import java.util.List;

public abstract class Montage extends MontageComposite
{
   List<MontageComposite>   composantes = new ArrayList<MontageComposite> ();
   
   
   public Montage addComposant(MontageComposite cp)
   {
      composantes.add (cp);
      return this;
   }
   
   public Montage (String name)
   {
      super (name);
   }
  
   @Override
   public double PrixTTC()
   {
      double somme=0;
      for (MontageComposite cp : composantes) {
         somme+=cp.PrixTTC();
      }
      
      return somme;
   }
   
   
   @Override
   public String toString ()
   {
      String res=super.toString ()+"  Prix Totale :" + this.PrixTTC () + "\n";
      for (MontageComposite cp : composantes) {
         res+=cp.toString ()+"\n";
      }
      return res;   
   }
   
   
}
