package Composite;

public abstract class MontageComposite
{
   protected String name;
   
   public MontageComposite ()
   {
      // TODO Auto-generated constructor stub
   }
   public MontageComposite (String name_)
   {
      name=name_;
   }
   
   public abstract  double PrixTTC();
   
   
   public String getName ()
   {
      return name;
   }
   public void setName (String name)
   {
      this.name = name;
   }
   
   
   @Override
   public String toString ()
   {
      // TODO Auto-generated method stub
      return "name : "+name;
   }
   
}
