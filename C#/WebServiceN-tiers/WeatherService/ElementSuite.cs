using System;
using System.Collections.Generic;
using System.Text;
using System.Xml;

namespace WeatherService
{
    public partial class InfoMeteo
    {
        /*
        * Constructures
        */
        public InfoMeteo()
        {
        }

        public InfoMeteo(XmlNodeList elements)
        {
            this.elements = elements;
            IsValide();
        }


        /*
         * Public Function
         */
        public bool IsSuccess()
        {
            if (status && elements != null)
                return true;
            else
                return false;
        }

        public bool parser()
        {
            if (status)
            {
                parserLocal();
                return true;
            }
            else return false;
        }

        /*
         * PRIVATE FUNCTION
         */

        /// <summary>
        /// verfier si la requete est un succes ou pas
        /// </summary>
        void IsValide()
        {
            String Statuss = elements[0].SelectNodes("Status").Item(0).InnerText;
            if (Statuss == "Success")
            {
                this.status = true;
            }
        }

        /// <summary>
        ///     un fonction qui permet de parser les donnees si c'est un succees
        /// </summary>
        void parserLocal()
        {
            if (status)
            {
                _location = elements[0].SelectNodes("Location").Item(0).InnerText;
                _time = elements[0].SelectNodes("Time").Item(0).InnerText;
                _vent = elements[0].SelectNodes("Wind").Item(0).InnerText;
                _visibilty = elements[0].SelectNodes("Visibility").Item(0).InnerText;
                _temperateur = elements[0].SelectNodes("Temperature").Item(0).InnerText;
                _humidite = elements[0].SelectNodes("RelativeHumidity").Item(0).InnerText;
                _pression = elements[0].SelectNodes("Pressure").Item(0).InnerText;
            }
        }
    }
}
