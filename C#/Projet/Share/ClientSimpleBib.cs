using System;
using System.Collections.Generic;
using System.Text;

using RemotingInterfaces;

namespace RemotingPartagees 
{
    public partial class  Bibio : IBibioSimple
    {

        /*
         *
         * POUR TOUT LES CLient
         * 
         */

        //Recherche ISBN
        public KeyValuePair<ILivre, List<String>> RechercheParISBN(String isbn)
        {
            foreach (KeyValuePair<ILivre, List<String>> ele in livres)
                if (ele.Key.ISBN.Equals(isbn))
                    return ele;
            return new KeyValuePair<ILivre, List<string>>(null, null);
        }

        public KeyValuePair<ILivre, List<String>> RechercheParAuteur(String auteur)
        {
            foreach (KeyValuePair<ILivre, List<String>> ele in livres)
                if (ele.Key.Auteur.Equals(auteur))
                    return ele;
            return new KeyValuePair<ILivre, List<string>>(null, null);
        }

        //Autentifier
        public bool Autentifier(String pseudo, String password)
        {
            return AutentifierLocal(pseudo, password);
        }
        
    }
}
