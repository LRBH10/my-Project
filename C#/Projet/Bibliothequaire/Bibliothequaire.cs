using System;
using System.Collections.Generic;
using System.Runtime.Remoting;
using System.Runtime.Remoting.Channels;
using System.Runtime.Remoting.Channels.Http;
using System.Runtime.Remoting.Channels.Tcp;

using RemotingInterfaces;

namespace RemotingBibliothequaire
{
    public class Bibliothequaire
    {

        //attribute
        String pseudo = "";
        String password = "";
        bool isConnected = false;
        String URL;
        IBibliothequaire bibio;

        /*
         * 
         * Constructeur
         * 
         */
        public Bibliothequaire(String UrlServeur)
        {
            TcpChannel chan = new TcpChannel();
            ChannelServices.RegisterChannel(chan, true);
            this.URL = UrlServeur;
            bibio = (IBibliothequaire)Activator.GetObject(typeof(IBibliothequaire), URL);
        }

        //Autentifié
        public bool Connexion(String psdo, String mdp)
        {
            if (bibio.AutentifierBib(psdo, mdp))
            {
                this.pseudo = psdo;
                this.password = mdp;
                this.isConnected = true;
                return true;
            }
            return false;
        }

        //Ajouter Livre
        public String AjouteLivre(String titre, String auteur, String editeur, String isbn, int nbrEx)
        {
            return bibio.AjouterLivre(this.pseudo, this.password, titre, auteur, isbn, editeur, nbrEx);
        }

        //Ajouter Abonner
        public String AjouterAbonnee(String name, String mdp)
        {
            return bibio.AjouterAbonnee(this.pseudo, this.password, name, mdp);
        }


        //is Connecter
        public bool IsConnected
        {
            get { return isConnected; }
        }

        //deconnexion
        public void Deconnexion()
        {
            this.isConnected = false;
            this.pseudo = "";
            this.password = "";
        }
    }
}
