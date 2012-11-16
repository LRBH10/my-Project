package Decourateur;

public class RamDec extends RamDecoree
{
   double prix;
   public RamDec (double prix )
   {
      this.prix=prix;
   }
   @Override
   public double PrixTTC ()
   {
      // TODO Auto-generated method stub
      return prix;
   }
   
   
}
