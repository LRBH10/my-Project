using System;
using System.Collections.Generic;
using System.Text;


namespace RemotingPartagees
{
    public class Livre : MarshalByRefObject, RemotingInterfaces.ILivre
    {
        private String auteur;
        private String titre;
        private String Isbn;
        private String editeur;
        private int nbrExamplaire;

        public Livre()
        {
            this.auteur = "";
            this.titre = "";
            this.Isbn = "";
            this.editeur = "";
            this.nbrExamplaire = 0;
        }

        public Livre(String at, String ti, String isbn,String ed,int nbrEx)
        {
            this.auteur = at;
            this.titre = ti;
            this.Isbn = isbn;
            this.editeur = ed;
            this.nbrExamplaire = nbrEx;
        }

        
        //Les getters et setters
        public String Auteur
        {
            get { return this.auteur; }
        }
        public String Titre
        {
            get { return this.titre; }
        }
        public String ISBN
        {
            get { return this.Isbn; }
        }
        public String Edtieur
        {
            get { return this.editeur; }
        }
        public int NombreExamplaire
        {
            get { return this.nbrExamplaire; }
            set { this.nbrExamplaire = value; }
        }


        //toString
        public override String ToString()
        {
            String str = "";
            str += "Nom Livre   :\t" + this.Titre + "\n";
            str += "Auteur      :\t" + this.auteur + "\n";
            str += "Editeur     :\t" + this.editeur + "\n";
            str += "ISBN13      :\t" + this.Isbn + "\n";
            str += "Examplaire  :\t" + this.nbrExamplaire + "\n";
            return str;
        }
        public String Affiche()
        {
            String str = "";
            str += "Nom Livre   :\t" + this.Titre + "\n";
            str += "Auteur      :\t" + this.auteur + "\n";
            str += "Editeur     :\t" + this.editeur + "\n";
            str += "ISBN13      :\t" + this.Isbn + "\n";
            str += "Examplaire  :\t" + this.nbrExamplaire + "\n";
            return str;
        }

        public String ToXML()
        {
            String str = "";
            str += "<titre>"    + this.Titre    + "</titre>\n";
            str += "<auteur>"   + this.auteur   + "</auteur>\n";
            str += "<editeur>"  + this.editeur  + "</editeur>\n";
            str += "<isbn13>"   + this.Isbn     + "</isbn13>\n";
            return str;
        }
    }
}
