using System;
using System.Collections.Generic;
using System.Text;
using RemotingInterfaces;

namespace RemotingPartagees
{
    public partial class Bibio: IBibioAbonnee
    {


        /*
         * 
         * LES ABONNNEEEEEEEEEEEs SUELEMENT
         * 
         */

        //add comaintaire
        public String AjouterCommantaireLivre(String pseudo, String mdp, ILivre livre, String comment)
        {
            if (AutentifierLocal(pseudo, mdp))
            {
                foreach (KeyValuePair<ILivre, List<String>> ele in livres)
                    if (ele.Key.Equals(livre))
                    {
                        ele.Value.Add(comment);
                        return "Ajout OK";
                    }
                return "Livre n'exist pas";

            }
            else
            {
                Console.WriteLine("Pesudo ou Mot de passe Erroné");
                return "Pesudo ou Mot de passe Erroné";
            }
        }

    }
}
