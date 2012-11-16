package Decourateur;

public class XMainDecorateur
{
   public static void main (String[] args)
   {
      RamDecoree ram=new RamDec (200);
      ram=new RamRedec (ram, 0.5);
      System.out.println(ram.PrixTTC ());
   }
}
