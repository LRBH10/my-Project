using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

using RemotingBibliothequaire;

namespace BibliothequaireFram
{
    
    public partial class Form1 : Form
    {
        Bibliothequaire admin = new Bibliothequaire("tcp://localhost:8089/Bibio");
        public Form1()
        {
            InitializeComponent();
        }

        private void ConnexionButton_Click(object sender, EventArgs e)
        {
            if (admin.IsConnected)
            {
                admin.Deconnexion();
                AdminBox.Visible = false;
                ConnexionButton.Text = "Connexion";
                return;
            }
            if (pseudoEdit.Text.Length == 0 || passwordEdit.Text.Length == 0)
            {
                MessageBox.Show("Les shamps pseudo et Mot de passe sont obligatoire");
                return;
            }

            if (admin.Connexion(pseudoEdit.Text, passwordEdit.Text))
            {
                //MessageBox.Show("Connexion OK");
                ConnexionButton.Text = "Deconnexion";
                AdminBox.Visible = true;
            }
            else
            {
                MessageBox.Show("Pseudo ou Mot de passe Erroné");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (admin.IsConnected)
            {
                admin.AjouterAbonnee(nomAbonneeEdit.Text,passwordAbonneEdit.Text);
                MessageBox.Show("Ajoute d'abonnee OK");
            }
            else
                MessageBox.Show("Il faut s'identifier pour ajouter un abonnee");
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (titreEdit.Text.Length == 0 || AuteurEdit.Text.Length == 0 || ISBN13Edit.Text.Length == 0 ||
                EditeurEdit.Text.Length == 0)
            {
                MessageBox.Show("Tous les champs sont obligatoire");
                return;
            }

            if (admin.IsConnected)
            {
                admin.AjouteLivre(titreEdit.Text, AuteurEdit.Text, EditeurEdit.Text, ISBN13Edit.Text, 10);
                MessageBox.Show("Ajoute de Livre OK");
                
            }
            else
                MessageBox.Show("Il faut s'identifier pour ajouter un abonnee");
        }

        
       
    }
}
