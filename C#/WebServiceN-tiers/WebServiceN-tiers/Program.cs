using System;
using System.Collections.Generic;
using System.Text;

using WeatherService;
using ConvertirService;

namespace WebServiceN_tiers
{
    class Program
    {
        static void Main(string[] args)
        {
            Consultation ss = new Consultation();
            ss.recupererVilles("France");
            
            ss.consulter("Montpellier", "france");
            Console.WriteLine(ss.Valeurs.Location);
            Console.WriteLine(ss.Valeurs.Temperature);
            String[] lst = ss.Valeurs.Temperature.Split(' ');

            Console.WriteLine(lst.GetValue(1));
            string sss = (String)lst.GetValue(1);
            Console.WriteLine(sss);
            
            
            double x = double.Parse(sss);
            Convertir ss1 = new Convertir();
            double s = ss1.convertireFahToCel(x);
            s = ss1.convertireFahToKalv(x);
            
            Console.WriteLine(s);
            Console.ReadLine();
        }
    }
}
