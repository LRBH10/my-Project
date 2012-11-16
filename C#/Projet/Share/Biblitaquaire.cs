using System;
using System.Collections.Generic;
using System.Text;
using RemotingInterfaces;

namespace RemotingPartagees
{
    public partial class  Bibio :  IBibliothequaire
    {
        /*
         * 
         * Pour le BIBLIOTHEQUAIRE
         * 
         * */
        public String AjouterAbonnee(String pseudo, String motDePasse, String PSAbonnee, String MDPAbonnee)
        {
            String result = "Pseudo ou Mot de Passe de Bibiothequaire est Erroné";
            if (AutentifierLocalAdmin(pseudo, motDePasse))
            {
                AjouterAbonneeLocal(PSAbonnee, MDPAbonnee);
                result = "Abonnée Ajouter avec succées";
            }
            return result;
        }

        public String AjouterLivre(String pseudo, String motDePasse,
            String titre,
            String auteur,
            String isbn,
            String editeur,
            int nbrExem)
        {
            String result = "Pseudo ou Mot de Passe de Bibiothequaire est Erroné";
            if(AutentifierLocalAdmin(pseudo,motDePasse))
            {
                AjouterLivreLocal(new Livre(auteur,titre,isbn,editeur,nbrExem));
                return "Ajoute de Livre Reusie";
            }
            return result;
        }
        public String DeleteLivre(String pseudo, String motDePasse, ILivre livre)
        {
            String result = "Pseudo ou Mot de Passe de Bibiothequaire est Erroné";
            if (AutentifierLocalAdmin(pseudo, motDePasse))
            {
                if (livres.ContainsKey(livre))
                {
                    livres.Remove(livre);
                    return "Suppression OK";
                }
                else return "Le livre n'existe pas";
            }
            return result;
        }

        public bool AutentifierBib(String pseudo, String motDePasse)
        {
            return AutentifierLocalAdmin(pseudo, motDePasse);
        }
    }
}
