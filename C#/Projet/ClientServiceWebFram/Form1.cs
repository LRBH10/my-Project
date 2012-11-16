using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

using ClienWebService;

namespace ClientServiceWebFram
{
    public partial class Form1 : Form
    {
        BiblioService service = new BiblioService();
        ISBNService.ISBNService serviceISBN = new ISBNService.ISBNService();       
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
                String var = service.GetLivreAuteur(RechercheEdit.Text);
                label1.Text = var;    
            }

            else if (TypeCombo.Text.Equals("Par ISBN 13"))
            {
                //MessageBox.Show("Par ISBN");
                String var = service.GetLivreISBN13(RechercheEdit.Text);
                label1.Text = var;
            }

            else
            {
                MessageBox.Show("Methode de recherche non exsitante");
            }
        }

        
        private void AddCommentButton_Click(object sender, EventArgs e)
        {
            MessageBox.Show(service.AjouterCommantaire(pseudoEdit.Text,passwordEdit.Text,AddCommentText.Text));
        }

        private void ISBNverfier_Click(object sender, EventArgs e)
        {
            if (IsbnEdit.Text.Length != 13)
            {
                MessageBox.Show("L'isbn ERRONe");
                return;
            }
            bool result = serviceISBN.IsValidISBN13(IsbnEdit.Text);
            if (result)
                MessageBox.Show("L'isbn 13 est valide");
            else
                MessageBox.Show("L'isbn 13 n'est valide");
        }

    }
}
