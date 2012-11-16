using System;
using System.Collections.Generic;
using System.Text;

namespace RemotingInterfaces
{
    public interface IBibioSimple 
    {
        //Recherche ISBN
        KeyValuePair<ILivre,List<String>> RechercheParISBN(String isbn);
        KeyValuePair<ILivre, List<String>> RechercheParAuteur(String auteur);
        bool Autentifier(String pseudo, String password);
    }

    public interface IBibioAbonnee : IBibioSimple
    {
        String AjouterCommantaireLivre(String pseudo, String mdp, ILivre livre, String comment);
    }

    
    public interface ILivre
    {
        String Auteur { get; }
        String Titre { get; }
        String ISBN { get; }
        String Edtieur { get; }
        int NombreExamplaire { get; set; }
        String Affiche();
        String ToXML();
    }
}
