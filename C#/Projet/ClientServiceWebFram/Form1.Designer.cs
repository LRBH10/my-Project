namespace ClientServiceWebFram
{
    partial class Form1
    {
        /// <summary>
        /// Variable nécessaire au concepteur.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Nettoyage des ressources utilisées.
        /// </summary>
        /// <param name="disposing">true si les ressources managées doivent être supprimées ; sinon, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Code généré par le Concepteur Windows Form

        /// <summary>
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.RechercheBox = new System.Windows.Forms.GroupBox();
            this.RechercheButton = new System.Windows.Forms.Button();
            this.TypeCombo = new System.Windows.Forms.ComboBox();
            this.RechercheEdit = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.ConnexionBox = new System.Windows.Forms.GroupBox();
            this.label6 = new System.Windows.Forms.Label();
            this.pseudoEdit = new System.Windows.Forms.TextBox();
            this.label7 = new System.Windows.Forms.Label();
            this.passwordEdit = new System.Windows.Forms.TextBox();
            this.AddCommentText = new System.Windows.Forms.RichTextBox();
            this.AddCommentButton = new System.Windows.Forms.Button();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.IsbnEdit = new System.Windows.Forms.TextBox();
            this.ISBNverfier = new System.Windows.Forms.Button();
            this.RechercheBox.SuspendLayout();
            this.ConnexionBox.SuspendLayout();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // RechercheBox
            // 
            this.RechercheBox.Controls.Add(this.RechercheButton);
            this.RechercheBox.Controls.Add(this.TypeCombo);
            this.RechercheBox.Controls.Add(this.RechercheEdit);
            this.RechercheBox.Location = new System.Drawing.Point(20, 56);
            this.RechercheBox.Name = "RechercheBox";
            this.RechercheBox.Size = new System.Drawing.Size(244, 148);
            this.RechercheBox.TabIndex = 5;
            this.RechercheBox.TabStop = false;
            this.RechercheBox.Text = "Recherche";
            // 
            // RechercheButton
            // 
            this.RechercheButton.Location = new System.Drawing.Point(50, 112);
            this.RechercheButton.Name = "RechercheButton";
            this.RechercheButton.Size = new System.Drawing.Size(162, 23);
            this.RechercheButton.TabIndex = 2;
            this.RechercheButton.Text = "Rechercher";
            this.RechercheButton.UseVisualStyleBackColor = true;
            this.RechercheButton.Click += new System.EventHandler(this.RechercheButton_Click);
            // 
            // TypeCombo
            // 
            this.TypeCombo.FormattingEnabled = true;
            this.TypeCombo.Items.AddRange(new object[] {
            "Par Auteur",
            "Par ISBN 13"});
            this.TypeCombo.Location = new System.Drawing.Point(50, 75);
            this.TypeCombo.Name = "TypeCombo";
            this.TypeCombo.Size = new System.Drawing.Size(121, 21);
            this.TypeCombo.Sorted = true;
            this.TypeCombo.TabIndex = 1;
            // 
            // RechercheEdit
            // 
            this.RechercheEdit.Location = new System.Drawing.Point(50, 42);
            this.RechercheEdit.Name = "RechercheEdit";
            this.RechercheEdit.Size = new System.Drawing.Size(162, 20);
            this.RechercheEdit.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(336, 49);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(120, 13);
            this.label1.TabIndex = 6;
            this.label1.Text = "aucun Livre selectionné";
            // 
            // ConnexionBox
            // 
            this.ConnexionBox.Controls.Add(this.AddCommentButton);
            this.ConnexionBox.Controls.Add(this.AddCommentText);
            this.ConnexionBox.Controls.Add(this.passwordEdit);
            this.ConnexionBox.Controls.Add(this.label7);
            this.ConnexionBox.Controls.Add(this.pseudoEdit);
            this.ConnexionBox.Controls.Add(this.label6);
            this.ConnexionBox.Location = new System.Drawing.Point(20, 224);
            this.ConnexionBox.Name = "ConnexionBox";
            this.ConnexionBox.Size = new System.Drawing.Size(381, 205);
            this.ConnexionBox.TabIndex = 11;
            this.ConnexionBox.TabStop = false;
            this.ConnexionBox.Text = "AjouterCommentaire";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(24, 37);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(45, 13);
            this.label6.TabIndex = 0;
            this.label6.Text = "PSeudo";
            // 
            // pseudoEdit
            // 
            this.pseudoEdit.Location = new System.Drawing.Point(100, 37);
            this.pseudoEdit.Name = "pseudoEdit";
            this.pseudoEdit.Size = new System.Drawing.Size(124, 20);
            this.pseudoEdit.TabIndex = 1;
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Location = new System.Drawing.Point(17, 79);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(77, 13);
            this.label7.TabIndex = 2;
            this.label7.Text = "Mot De Passe ";
            // 
            // passwordEdit
            // 
            this.passwordEdit.Location = new System.Drawing.Point(100, 76);
            this.passwordEdit.Name = "passwordEdit";
            this.passwordEdit.Size = new System.Drawing.Size(104, 20);
            this.passwordEdit.TabIndex = 3;
            this.passwordEdit.UseSystemPasswordChar = true;
            // 
            // AddCommentText
            // 
            this.AddCommentText.Location = new System.Drawing.Point(43, 118);
            this.AddCommentText.Name = "AddCommentText";
            this.AddCommentText.Size = new System.Drawing.Size(308, 52);
            this.AddCommentText.TabIndex = 5;
            this.AddCommentText.Text = "Inserer votre commentaire ICI";
            // 
            // AddCommentButton
            // 
            this.AddCommentButton.Location = new System.Drawing.Point(76, 176);
            this.AddCommentButton.Name = "AddCommentButton";
            this.AddCommentButton.Size = new System.Drawing.Size(202, 23);
            this.AddCommentButton.TabIndex = 6;
            this.AddCommentButton.Text = "Ajouter le Commentaire";
            this.AddCommentButton.UseVisualStyleBackColor = true;
            this.AddCommentButton.Click += new System.EventHandler(this.AddCommentButton_Click);
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.ISBNverfier);
            this.groupBox1.Controls.Add(this.IsbnEdit);
            this.groupBox1.Location = new System.Drawing.Point(463, 224);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(326, 198);
            this.groupBox1.TabIndex = 12;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Validité ISBN13";
            // 
            // IsbnEdit
            // 
            this.IsbnEdit.Location = new System.Drawing.Point(52, 61);
            this.IsbnEdit.Name = "IsbnEdit";
            this.IsbnEdit.Size = new System.Drawing.Size(225, 20);
            this.IsbnEdit.TabIndex = 0;
            // 
            // ISBNverfier
            // 
            this.ISBNverfier.Location = new System.Drawing.Point(78, 123);
            this.ISBNverfier.Name = "ISBNverfier";
            this.ISBNverfier.Size = new System.Drawing.Size(152, 29);
            this.ISBNverfier.TabIndex = 1;
            this.ISBNverfier.Text = "verfier la validité";
            this.ISBNverfier.UseVisualStyleBackColor = true;
            this.ISBNverfier.Click += new System.EventHandler(this.ISBNverfier_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(818, 464);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.ConnexionBox);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.RechercheBox);
            this.Name = "Form1";
            this.Text = "Form1";
            this.RechercheBox.ResumeLayout(false);
            this.RechercheBox.PerformLayout();
            this.ConnexionBox.ResumeLayout(false);
            this.ConnexionBox.PerformLayout();
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.GroupBox RechercheBox;
        private System.Windows.Forms.Button RechercheButton;
        private System.Windows.Forms.ComboBox TypeCombo;
        private System.Windows.Forms.TextBox RechercheEdit;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.GroupBox ConnexionBox;
        private System.Windows.Forms.Button AddCommentButton;
        private System.Windows.Forms.RichTextBox AddCommentText;
        private System.Windows.Forms.TextBox passwordEdit;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.TextBox pseudoEdit;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Button ISBNverfier;
        private System.Windows.Forms.TextBox IsbnEdit;
    }
}

