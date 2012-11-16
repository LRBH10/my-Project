using System;
using System.Collections.Generic;
using System.Web;
using System.Web.Services;

using RemotingInterfaces;
using RemotingPartagees;

[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]

public class Service : System.Web.Services.WebService
{
    Bibio serverBiblio = new Bibio();
    public Service () {
        //Uncomment the following line if using designed components 
        //InitializeComponent(); 
    }


    [WebMethod]
    public String ParAuteur(string auteur)
    {
        
        String xml = "";
        KeyValuePair<ILivre, List<String>> element = serverBiblio.RechercheParAuteur(auteur);

        return element.Key.ToString() ;
    }
    
    

    [WebMethod]
    public string ParISBN13(string isbn)
    {
        String xml = "";
        KeyValuePair<ILivre, List<String>> element = serverBiblio.RechercheParISBN(isbn);
        return element.Key.ToString();
    }


    /// <summary>
    /// Ajouter un commaintaire
    /// </summary>
    /// <param name="pseudo"></param>
    /// <param name="password"></param>
    /// <param name="isbn"></param>
    /// <param name="comment"></param>
    /// <returns> Etat de la requete</returns>
    [WebMethod]
    public string AddComment(string pseudo, string password, string isbn, string comment)
    {
        String xml = "";
        KeyValuePair<ILivre, List<String>> element = serverBiblio.RechercheParISBN(isbn);
        if (element.Key == null)
        {
            xml = "existe pas";
            return xml;
        }
        xml = serverBiblio.AjouterCommantaireLivre(pseudo, password, element.Key , comment);
        return xml;
    }

    /// <summary>
    /// DEBUGEUR
    /// </summary>
    /// <returns></returns>
    [WebMethod]
    public string Affiche()
    {
        String xml = "";
        xml = serverBiblio.ToXML();
        return xml;
    }
}