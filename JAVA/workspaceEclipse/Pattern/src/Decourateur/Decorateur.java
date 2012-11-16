package Decourateur;

public abstract class Decorateur extends RamDecoree
{
   protected RamDecoree dec;
   
   public void setDec (RamDecoree dec)
   {
      this.dec = dec;
   }
   public RamDecoree getDec ()
   {
      return dec;
   }
   
   public Decorateur (RamDecoree ram)
   {
      // TODO Auto-generated constructor stub
      dec=ram;
   }
   public abstract double PrixTTC();
}
