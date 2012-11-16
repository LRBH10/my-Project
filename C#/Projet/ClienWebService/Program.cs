using System;
using System.Collections.Generic;
using System.Text;

namespace ClienWebService
{
    class Program
    {
        static void Main(string[] args)
        {
            BiblioService service = new BiblioService();
            Console.WriteLine(service.Debuger());
            Console.WriteLine(service.GetLivreAuteur("rabah"));
            Console.WriteLine(service.GetLivreISBN13("2012"));
            Console.WriteLine(service.AjouterCommantaire("bibouh","rabahsss","riche d'information"));
            Console.WriteLine(service.AjouterCommantaire("bibouh","rabah","riche d'information"));
            Console.ReadLine();
            
        }
    }
}
