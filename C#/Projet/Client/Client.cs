using System;
using System.Collections.Generic;
using System.Runtime.Remoting;
using System.Runtime.Remoting.Channels;
using System.Runtime.Remoting.Channels.Http;
using System.Runtime.Remoting.Channels.Tcp;

using RemotingInterfaces;

namespace RemotingClient
{
    public class Client
    {

        //attribute
        String pseudo = "";
        String password = "";
        bool isConnected = false;
        String URL;
        IBibioSimple bibio;



        /*
         * 
         * Constructeur
         * 
         */
        public Client(String UrlServeur)
        {
            TcpChannel chan = new TcpChannel();
            ChannelServices.RegisterChannel(chan, true);
            this.URL = UrlServeur;
            bibio = (IBibioSimple)Activator.GetObject(typeof(IBibioSimple), URL);
            
        }


        /*
         * cLIENT Simple
         * 
         * 
         * */

        //recherche Livre
        public KeyValuePair<ILivre, List<String>> RechercheLivre(String query, int type = 1)
        {
            //REcuperation de l'objet
            KeyValuePair<ILivre, List<String>> result;
            
            //Recherche par Nom
            if (type == 1) result = bibio.RechercheParAuteur(query);
            //recherche par ISBN type ==2
            else result = bibio.RechercheParISBN(query);

            return result;
        }

        //Autentifié
        public bool Connexion(String psdo, String mdp)
        {
            if (bibio.Autentifier(psdo, mdp))
            {
                this.pseudo = psdo;
                this.password = mdp;
                this.isConnected = true;
                return true;
            }
            return false;
        }


        /*
         * Client Abonnee
         * 
         * */
        //ajouter Commantaire
        public String addCommantaire(ILivre livre, String comment)
        {
            
            String resultat = "Il faut s'autentifier pour ajouter commentaire";
            if (this.isConnected)
            {
                IBibioAbonnee bib = (IBibioAbonnee) bibio;
                resultat = bib.AjouterCommantaireLivre(this.pseudo, this.password, livre, comment);
                
            }
            return resultat;
        }

        //is connected
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
