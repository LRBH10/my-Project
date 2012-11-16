using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Windows.Data.Xml.Dom;

namespace WebServiceSOAP
{
    public partial class InfoMeteo
    {
        /*
        * Les variables
        */
        bool status = false;
        String _location = "";
        String _time = "";
        String _vent = "";
        String _visibilty = "";
        String _temperateur = "";
        String _humidite = "";
        String _pression = "";
        XmlNodeList elements;

        /*
         * Getters
         */
        public XmlNodeList Elements
        {
            get { return elements; }
            set
            {
                elements = value;
                status = false;
                IsValide();
            }
        }
        public String Location
        {
            get { return _location; }
        }

        public String Time
        {
            get { return _time; }
        }

        public String Vent
        {
            get { return _vent; }
        }

        public String Temperature
        {
            get { return _temperateur; }
        }


        public String Vision
        {
            get { return _visibilty; }
        }

        public String Humidite
        {
            get { return _humidite; }
        }

        public String Pression
        {
            get { return _pression; }
        }

    }
}
