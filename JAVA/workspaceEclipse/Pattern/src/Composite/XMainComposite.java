package Composite;

public class XMainComposite
{
   /**
    * @param args
    */
   public static void main (String[] args)
   {
      Ordinateur or=new Ordinateur ("Ordinateur 1");
      or.addComposant (
            new CarteMereMontee ("carte mere 1").addComposant (new Ram("Ram 1",150))
            .addComposant (new DisqueDur ("DD 1", 500))
            .addComposant (new DisqueDur ("DD 2", 500))
            ).addComposant (new Ram ("RAM 2",175));

      System.out.println(or);
   }

}
