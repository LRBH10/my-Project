package Decourateur;

public class RamRedec extends Decorateur
{

   double red;
   public RamRedec (RamDecoree ram, double red)
   {
      super (ram);
      this.red=red;
   }

   @Override
   public double PrixTTC ()
   {
      // TODO Auto-generated method stub
      return this.dec.PrixTTC ()*red;
   }

}
