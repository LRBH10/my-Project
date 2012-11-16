using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

using RemotingClient;
using RemotingInterfaces;

namespace ClientFram
{
    public partial class Form1 : Form
    {
        /*
         * 
         * ATTRIBUT DE CLIENT STUB
         * 
         * */
        Client client = new Client("tcp://localhost:8089/Bibio");
        ILivre encours;
        public Form1()
        {
            InitializeComponent();
        }

        private void RechercheButton_Click(object sender, EventArgs e)
        {

            if (RechercheEdit.Text.Length == 0)
            {
                MessageBox.Show("Inserer un Mot clé");
                return;
            }
            if (TypeCombo.Text.Equals("Par Auteur"))
            {
                //MessageBox.Show("Par Auteur");
                KeyValuePair<ILivre, List<String>> var = client.RechercheLivre(RechercheEdit.Text);
                encours = var.Key;
                updateLivre(var);
            }

            else if (TypeCombo.Text.Equals("Par ISBN 13"))
            {
                //MessageBox.Show("Par ISBN");
                KeyValuePair<ILivre, List<String>> var = client.RechercheLivre(RechercheEdit.Text,2);
                encours = var.Key;
                updateLivre(var);
            }

            else
            {
                MessageBox.Show("Methode de recherche non exsitante");
            }
        }

        /*
         * 
         * UPDATE LIVRE
         * 
         * */
        
        private void updateLivre(KeyValuePair<ILivre, List<String>> valeur)
        {
            if (valeur.Key == null)
            {
                MessageBox.Show("Aucune Correspendance a ce livre");
                return;
            }
            //le livre
            TitreLabel.Text = valeur.Key.Titre;
            AuteurLabel.Text = valeur.Key.Auteur;
            EditeurLabel.Text = valeur.Key.Edtieur;
            ISBNLabel.Text = valeur.Key.ISBN;

            
            CommentList.Items.Clear();
            foreach (String ele in valeur.Value)
                CommentList.Items.Add(ele);
            
        }

        private void ConnexionButton_Click(object sender, EventArgs e)
        {
            if (!client.IsConnected)
            {
                if (pseudoEdit.Text.Length == 0 || passwordEdit.Text.Length == 0)
                {
                    MessageBox.Show("les champs Pseudo et Mot de passe sont obligatoire");
                    return;
                }
                
                if (client.Connexion(pseudoEdit.Text, passwordEdit.Text))
                {
                    AddComment.Visible = true;
                    ConnexionButton.Text = "Deconnexion";
                    pseudoEdit.Visible = false;
                    passwordEdit.Visible = false;
                }
                else MessageBox.Show("PSeudo ou Mot de Passe Erroné");
            }
            else
            {
                client.Deconnexion();
                pseudoEdit.Visible = true;
                passwordEdit.Visible = true;
                ConnexionButton.Text = "Connexion";
            }
        }

        private void AddCommentButton_Click(object sender, EventArgs e)
        {
            client.addCommantaire(encours, AddCommentText.Text);
            KeyValuePair<ILivre, List<String>> var = client.RechercheLivre(encours.Auteur);
            encours = var.Key;
            updateLivre(var);
        }      
    }
}
