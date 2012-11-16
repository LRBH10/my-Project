using System;
using System.Collections.Generic;
using System.Text;

using RemotingInterfaces;

namespace RemotingPartagees
{
    public partial class Bibio : MarshalByRefObject
    {
        //attribute
        Dictionary<ILivre, List<String>> livres;
        Dictionary<String, String> abonnees;
        Dictionary<String, String> admins;
        
        
        //Constructeur
        public Bibio()
        {
            livres=new Dictionary<ILivre,List<String>>();
            abonnees = new Dictionary<string, string>();
            admins = new Dictionary<String, String>();
            initInserLivre();
            initInserAbonnees();
            initInserAdmins();
            
            //pour la Creation de Serveur
            Console.WriteLine("Bibio Created");
        }

        

        /*
         *
         * LES FONCTION LOCAL DE LA CLASSS BIBIO 
         * 
         */

        //Verfication d'exstanence dans la base
        bool AutentifierLocal(String pseudo, String password)
        {
            if (abonnees.ContainsKey(pseudo))
            {
                String pass;
                abonnees.TryGetValue(pseudo, out pass);
                if (pass.Equals(password))
                    return true;
                else
                    return false;
            }
            else return false;
        }

        //Pour les biblithequaire
        bool AutentifierLocalAdmin(String pseudo, String password)
        {
            if (admins.ContainsKey(pseudo))
            {
                String pass;
                admins.TryGetValue(pseudo, out pass);
                if (pass.Equals(password))
                    return true;
                else
                    return false;
            }
            else return false;
        }

        //

        //Ajouter un Livre
        void AjouterLivreLocal(ILivre livre)
        {
            livres.Add(livre, new List<String>());
            if (livre.ISBN == "2012")
            {
                AjouterCommantaireLivre("bibouh", "rabah", livre, "un tres bonne liveres");
                AjouterCommantaireLivre("bibouh", "rabah", livre, "riche d'inforamtion");
            }
        }

        //Ajouter un Abonnee
        void AjouterAbonneeLocal(String pseudo, String mdp)
        {
            if (pseudo.Length != 0 && mdp.Length != 0)
                abonnees.Add(pseudo, mdp);
        }
        
        //Ajouter un Bibliothequaire
        void AjouterAdmin(String PS, String mdp)
        {
            if (PS.Length != 0 && mdp.Length != 0)
                admins.Add(PS, mdp);
        }


        /*
         * 
         *POUR L'AFFICHAGE d'UNE BIBIOTEHQUE 
         * 
         */
        //ToString
        public override String ToString()
        {
            String ret = "Les livres de LA bibioteque sont :\n";
            foreach(KeyValuePair<ILivre, List<String>> ele in livres)
            {
                ret += "**************************\n" + ele.Key.Affiche()+"\n\n Commaintaires:\n";
                if (ele.Value.Count == 0) ret += "Aucun Commantaire\n";
                else foreach(String eleString in ele.Value)
                    ret += eleString+"\n---------\n";
            }
            return ret;
        }

        /// <summary>
        /// COnversion en XML
        /// </summary>
        /// <returns></returns>
        public String ToXML()
        {
            String xml = "<all>";
            foreach (KeyValuePair<ILivre, List<String>> element in livres)
            {
                xml = xml + "<item><livre>" + element.Key.ToXML() + "</livre><nombreComment>" + element.Value.Count + "</nombreComment><comments>";
                foreach (string ele in element.Value)
                {

                    xml = xml + "<comment>" + ele + "<comment>";
                }
                xml = xml + "</comments></item>";
            }
            xml = xml + "</all>";
            return xml;
        }

        
        /*
         * 
         *POUR LES FONCTION D INITIALISATION Pour LES TEST SEULEMENT 
         * 
         */
        
        //inserer des livres pour tester
        void initInserLivre()
        {
            AjouterLivreLocal(new Livre("Damien Vergnaud", "Exercices et problèmes de cryptographie", "978-2-10-057340-0", "Dunod", 10));
            AjouterLivreLocal(new Livre("Jean-Francois Bouchaudy", "Linux Administration - Tome 3", "978-2-212-13462-9", "Eyrolles", 10));
            AjouterLivreLocal(new Livre("Mathieu Nebra", "Réalisez votre site web avec HTML5 et CSS3", "978-2-9535278-8-9", "Simple IT", 10));
            AjouterLivreLocal(new Livre("rabah", "test Remoting", "2012", "UM2", 10));
        }

        //inserer les aboonee
        void initInserAbonnees()
        {
            AjouterAbonneeLocal("bibouh", "rabah");
            AjouterAbonneeLocal("jack", "rose");
            AjouterAbonneeLocal("remeo", "juliet");
        }

        //INSERER ADMINS
        private void initInserAdmins()
        {
            AjouterAdmin("admin", "admin");   
        }

        
    }
}
