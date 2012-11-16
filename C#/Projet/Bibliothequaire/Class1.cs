using System;
using System.Collections.Generic;
using System.Text;

namespace RemotingBibliothequaire
{
    class Class1
    {
        public static int Main(string[] args)
        {
            Bibliothequaire admin = new Bibliothequaire("tcp://localhost:8089/Bibio");
            if (admin.Connexion("admin", "admin"))
                Console.WriteLine("OK");
            else
                Console.WriteLine("PAS OK");//*/

            Console.WriteLine(admin.AjouteLivre("sss","jim","UM2","2013",10));
            Console.WriteLine(admin.AjouterAbonnee("moh","oran"));

            Console.ReadLine();
            return 0;
        }
    }
}
