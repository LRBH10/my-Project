using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using System.Xml;
using Windows.Data.Xml.Dom;


namespace WebServiceSOAP
{
    public class Consultation
    {
        /*
         *  les declaration 
         */
        WeatherWSDL.GlobalWeatherSoapClient meteo = new WeatherWSDL.GlobalWeatherSoapClient();
        XmlDocument parser = new XmlDocument();
        InfoMeteo info = new InfoMeteo();
        Dictionary<String,List<String>> paysCities = new Dictionary<String, List<string>>();
        bool dejaCalculer = false;
    
        /*
         * Constructeur 
         */

        public Consultation()
        {
            
            
        }
        /*
         * Getters
         */

        public InfoMeteo Valeurs
        {
            get { return info; }
        }

        /*
         * La Fonction qui permet de consulter le service
         */
        /// <summary>
        ///  Consulter les Valeurs
        /// </summary>
        /// <param name="nomVille"> nom de la ville</param>
        /// <param name="pays">le pays</param>
        /// <returns>true si la ville exist dans le pays, false sinon</returns>
        public bool consulter(String nomVille, String pays)
        {
            bool res = false;
            Task<string> data = meteo.GetWeatherAsync(nomVille, pays);
            string xml = data.Result;
            if (xml != "Data Not Found")
            {
                parser.LoadXml(xml);
                info.Elements = parser.SelectNodes("CurrentWeather");
                if (info.IsSuccess())
                {
                    info.parser();
                    res = true;
                }
            }
            return res;
        }


        /// <summary>
        ///     
        /// </summary>
        /// <returns>Tous les pays</returns>
        public List<string> recupererPays()
        {
            List<String> paysres = new List<string>();
            foreach (String ele in paysCities.Keys)
                paysres.Add(ele);

            return paysres;
        }

        /// <summary>
        /// Tous les Villes
        /// </summary>
        /// <param name="pays"></param>
        /// <returns></returns>
        public List<String> recupererVilles(String pays)
        {
            foreach (KeyValuePair<String, List<String>> ele in paysCities)
                if (ele.Key == pays) return ele.Value;

            return new List<string>();
        }

        /// <summary>
        ///  calcule
        /// </summary>
        /// <returns></returns>
        public void recupereVillesPays()
        {
            if (!dejaCalculer)
            {
                Task<string> data = meteo.GetCitiesByCountryAsync("");
                string xml = data.Result;
                parser.LoadXml(xml);
                XmlNodeList tables = parser.GetElementsByTagName("Table");
                for (int i = 0; i < tables.Count; i++)
                {
                    String pays = tables[i].SelectNodes("Country").Item(0).InnerText;
                    String city = tables[i].SelectNodes("City").Item(0).InnerText;

                    if (!paysCities.ContainsKey(pays))
                        paysCities.Add(pays, new List<String>());

                    foreach (KeyValuePair<String, List<String>> ele in paysCities)
                        if (ele.Key == pays) ele.Value.Add(city);
                }
                dejaCalculer = true;
            }
        }
        
    }
}
