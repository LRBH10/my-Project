using System;
using System.Collections.Generic;
using System.Text;
using System.Xml;

namespace ClienWebService
{
    public class BiblioService
    {
        /// <summary>
        /// le Service
        /// </summary>
        BibiliServiceWeb.Service biblio = new BibiliServiceWeb.Service();
        String isbnEncours="";
        /// <summary>
        /// fonction qui permet de debuger le bibilio
        /// </summary>
        public String Debuger()
        {
            return biblio.Affiche();
        }
        /// <summary>
        /// Recuperer le livre par auteur
        /// </summary>
        /// <param name="auteur"></param>
        /// <returns></returns>
        public String GetLivreAuteur(string auteur)
        {
            string result = "aucun Livre attribuer a ce auteur " + auteur;
            BibiliServiceWeb.Livre xml = biblio.ParAuteur(auteur);
            XmlDocument parser = new XmlDocument();
            if (xml != null) 
            {
                
                String str = xml.ToString();
                result = str;
            }
            return result;
        }

        /// <summary>
        /// Recupere le livre avec ISBN
        /// </summary>
        /// <param name="isbn"></param>
        /// <returns></returns>
        public String GetLivreISBN13(string isbn)
        {
            string result = "aucun Livre attribuer a ce ISBN " + isbn;
            string xml = biblio.ParISBN13(isbn);
            XmlDocument parser = new XmlDocument();
            if (xml != "existe pas")
            {
                parser.LoadXml(xml);
                XmlNodeList elements = parser.SelectNodes("item")[0].SelectNodes("livre");

                String str = "";
                str += "Nom Livre   :\t" + elements[0].SelectNodes("titre").Item(0).InnerText + "\n";
                str += "Auteur      :\t" + elements[0].SelectNodes("auteur").Item(0).InnerText + "\n";
                str += "Editeur     :\t" + elements[0].SelectNodes("editeur").Item(0).InnerText + "\n";
                str += "ISBN13      :\t" + elements[0].SelectNodes("isbn13").Item(0).InnerText + "\n";

                isbnEncours = elements[0].SelectNodes("isbn13").Item(0).InnerText;

                result = str;
            }
            return result;
        }
        /// <summary>
        /// Ajouter un commaintaire
        /// </summary>
        /// <param name="pseudo"></param>
        /// <param name="password"></param>
        /// <param name="comment"></param>
        /// <returns></returns>
        public string AjouterCommantaire(String pseudo, string password, string comment)
        {
            string result = "";
            if(isbnEncours == "")
            {
                result = "aucun Livre selectionné";
                return result;
            }
            result = biblio.AddComment(pseudo, password, isbnEncours, comment);
            return result;
        }
     }
}
