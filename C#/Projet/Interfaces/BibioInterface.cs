using System;
using System.Collections.Generic;
using System.Text;

namespace RemotingInterfaces
{
    public interface IBibliothequaire
    {
        String AjouterAbonnee(String pseudo, String motDePasse, String PSAbonnee, String MDPAbonnee);
        String AjouterLivre(String pseudo, String motDePasse,
            String titre,
            String auteur,
            String isbn,
            String editeur,
            int nbrExem);
        String DeleteLivre(String pseudo, String motDePasse, ILivre livre);
        bool AutentifierBib(String pseudo, String motDePasse);
    }
}
