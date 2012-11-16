package Factory;



public class Compiler
{
   protected Lexer lex;
   protected Generator gen;
   protected Parser parse;
   
   public Compiler (Compiler ss)
   {
      
      lex=ss.getLex ();
      gen=ss.getGen ();
      parse = ss.getParse ();
   }
   
   public Lexer getLex ()
   {
      return lex;
   }
   
   public Generator getGen ()
   {
      return gen;
   }
   
   public Parser getParse ()
   {
      return parse;
   }
}
