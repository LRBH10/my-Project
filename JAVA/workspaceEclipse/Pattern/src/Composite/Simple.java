package Composite;

public abstract class Simple extends MontageComposite
{
   
   protected double prix;
   protected double tva = 1;
   
   public Simple (String name,double prix_)
   {
      super (name);
      prix=prix_;
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
      return prix*tva;
   }

   @Override
   public String toString ()
   {
      // TODO Auto-generated method stub
      return super.toString ()+"\t prix : "+prix+"\t TVA : "+tva;
   }
}
