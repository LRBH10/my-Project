namespace ClientFram
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
            this.LivreBox = new System.Windows.Forms.GroupBox();
            this.CommentList = new System.Windows.Forms.ListView();
            this.EditeurLabel = new System.Windows.Forms.Label();
            this.ISBNLabel = new System.Windows.Forms.Label();
            this.AuteurLabel = new System.Windows.Forms.Label();
            this.TitreLabel = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.pseudoEdit = new System.Windows.Forms.TextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.passwordEdit = new System.Windows.Forms.TextBox();
            this.ConnexionBox = new System.Windows.Forms.GroupBox();
            this.ConnexionButton = new System.Windows.Forms.Button();
            this.RechercheBox = new System.Windows.Forms.GroupBox();
            this.RechercheButton = new System.Windows.Forms.Button();
            this.TypeCombo = new System.Windows.Forms.ComboBox();
            this.RechercheEdit = new System.Windows.Forms.TextBox();
            this.AddComment = new System.Windows.Forms.Panel();
            this.AddCommentButton = new System.Windows.Forms.Button();
            this.AddCommentText = new System.Windows.Forms.RichTextBox();
            this.LivreBox.SuspendLayout();
            this.ConnexionBox.SuspendLayout();
            this.RechercheBox.SuspendLayout();
            this.AddComment.SuspendLayout();
            this.SuspendLayout();
            // 
            // LivreBox
            // 
            this.LivreBox.Controls.Add(this.AddComment);
            this.LivreBox.Controls.Add(this.CommentList);
            this.LivreBox.Controls.Add(this.EditeurLabel);
            this.LivreBox.Controls.Add(this.ISBNLabel);
            this.LivreBox.Controls.Add(this.AuteurLabel);
            this.LivreBox.Controls.Add(this.TitreLabel);
            this.LivreBox.Controls.Add(this.label5);
            this.LivreBox.Controls.Add(this.label4);
            this.LivreBox.Controls.Add(this.label3);
            this.LivreBox.Controls.Add(this.label2);
            this.LivreBox.Controls.Add(this.label1);
            this.LivreBox.Location = new System.Drawing.Point(258, 12);
            this.LivreBox.Name = "LivreBox";
            this.LivreBox.Size = new System.Drawing.Size(462, 387);
            this.LivreBox.TabIndex = 3;
            this.LivreBox.TabStop = false;
            this.LivreBox.Text = "Details Livre";
            // 
            // CommentList
            // 
            this.CommentList.Location = new System.Drawing.Point(27, 170);
            this.CommentList.Name = "CommentList";
            this.CommentList.Size = new System.Drawing.Size(341, 97);
            this.CommentList.TabIndex = 9;
            this.CommentList.UseCompatibleStateImageBehavior = false;
            // 
            // EditeurLabel
            // 
            this.EditeurLabel.AutoSize = true;
            this.EditeurLabel.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.EditeurLabel.Location = new System.Drawing.Point(102, 128);
            this.EditeurLabel.Name = "EditeurLabel";
            this.EditeurLabel.Size = new System.Drawing.Size(146, 13);
            this.EditeurLabel.TabIndex = 8;
            this.EditeurLabel.Text = "Aucun Livre Selectionné";
            // 
            // ISBNLabel
            // 
            this.ISBNLabel.AutoSize = true;
            this.ISBNLabel.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ISBNLabel.Location = new System.Drawing.Point(102, 101);
            this.ISBNLabel.Name = "ISBNLabel";
            this.ISBNLabel.Size = new System.Drawing.Size(146, 13);
            this.ISBNLabel.TabIndex = 7;
            this.ISBNLabel.Text = "Aucun Livre Selectionné";
            // 
            // AuteurLabel
            // 
            this.AuteurLabel.AutoSize = true;
            this.AuteurLabel.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.AuteurLabel.Location = new System.Drawing.Point(102, 75);
            this.AuteurLabel.Name = "AuteurLabel";
            this.AuteurLabel.Size = new System.Drawing.Size(146, 13);
            this.AuteurLabel.TabIndex = 6;
            this.AuteurLabel.Text = "Aucun Livre Selectionné";
            // 
            // TitreLabel
            // 
            this.TitreLabel.AutoSize = true;
            this.TitreLabel.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.TitreLabel.Location = new System.Drawing.Point(102, 49);
            this.TitreLabel.Name = "TitreLabel";
            this.TitreLabel.Size = new System.Drawing.Size(146, 13);
            this.TitreLabel.TabIndex = 5;
            this.TitreLabel.Text = "Aucun Livre Selectionné";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(23, 128);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(46, 13);
            this.label5.TabIndex = 4;
            this.label5.Text = "Editeur :";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(23, 128);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(0, 13);
            this.label4.TabIndex = 3;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(23, 101);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(50, 13);
            this.label3.TabIndex = 2;
            this.label3.Text = "ISBN13 :";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(23, 75);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(47, 13);
            this.label2.TabIndex = 1;
            this.label2.Text = "Auteur : ";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(23, 49);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(37, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "Titre : ";
            // 
            // pseudoEdit
            // 
            this.pseudoEdit.Location = new System.Drawing.Point(80, 44);
            this.pseudoEdit.Name = "pseudoEdit";
            this.pseudoEdit.Size = new System.Drawing.Size(124, 20);
            this.pseudoEdit.TabIndex = 1;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(17, 44);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(45, 13);
            this.label6.TabIndex = 0;
            this.label6.Text = "PSeudo";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Location = new System.Drawing.Point(17, 83);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(77, 13);
            this.label7.TabIndex = 2;
            this.label7.Text = "Mot De Passe ";
            // 
            // passwordEdit
            // 
            this.passwordEdit.Location = new System.Drawing.Point(100, 80);
            this.passwordEdit.Name = "passwordEdit";
            this.passwordEdit.Size = new System.Drawing.Size(104, 20);
            this.passwordEdit.TabIndex = 3;
            this.passwordEdit.UseSystemPasswordChar = true;
            // 
            // ConnexionBox
            // 
            this.ConnexionBox.Controls.Add(this.ConnexionButton);
            this.ConnexionBox.Controls.Add(this.passwordEdit);
            this.ConnexionBox.Controls.Add(this.label7);
            this.ConnexionBox.Controls.Add(this.pseudoEdit);
            this.ConnexionBox.Controls.Add(this.label6);
            this.ConnexionBox.Location = new System.Drawing.Point(8, 198);
            this.ConnexionBox.Name = "ConnexionBox";
            this.ConnexionBox.Size = new System.Drawing.Size(244, 166);
            this.ConnexionBox.TabIndex = 5;
            this.ConnexionBox.TabStop = false;
            this.ConnexionBox.Text = "Connexion";
            // 
            // ConnexionButton
            // 
            this.ConnexionButton.Location = new System.Drawing.Point(80, 128);
            this.ConnexionButton.Name = "ConnexionButton";
            this.ConnexionButton.Size = new System.Drawing.Size(124, 23);
            this.ConnexionButton.TabIndex = 4;
            this.ConnexionButton.Text = "Connexion";
            this.ConnexionButton.UseVisualStyleBackColor = true;
            this.ConnexionButton.Click += new System.EventHandler(this.ConnexionButton_Click);
            // 
            // RechercheBox
            // 
            this.RechercheBox.Controls.Add(this.RechercheButton);
            this.RechercheBox.Controls.Add(this.TypeCombo);
            this.RechercheBox.Controls.Add(this.RechercheEdit);
            this.RechercheBox.Location = new System.Drawing.Point(8, 12);
            this.RechercheBox.Name = "RechercheBox";
            this.RechercheBox.Size = new System.Drawing.Size(244, 148);
            this.RechercheBox.TabIndex = 4;
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
            // AddComment
            // 
            this.AddComment.Controls.Add(this.AddCommentText);
            this.AddComment.Controls.Add(this.AddCommentButton);
            this.AddComment.Location = new System.Drawing.Point(27, 273);
            this.AddComment.Name = "AddComment";
            this.AddComment.Size = new System.Drawing.Size(341, 108);
            this.AddComment.TabIndex = 10;
            this.AddComment.Visible = false;
            // 
            // AddCommentButton
            // 
            this.AddCommentButton.Location = new System.Drawing.Point(124, 72);
            this.AddCommentButton.Name = "AddCommentButton";
            this.AddCommentButton.Size = new System.Drawing.Size(202, 23);
            this.AddCommentButton.TabIndex = 0;
            this.AddCommentButton.Text = "Ajouter le Commentaire";
            this.AddCommentButton.UseVisualStyleBackColor = true;
            this.AddCommentButton.Click += new System.EventHandler(this.AddCommentButton_Click);
            // 
            // AddCommentText
            // 
            this.AddCommentText.Location = new System.Drawing.Point(18, 12);
            this.AddCommentText.Name = "AddCommentText";
            this.AddCommentText.Size = new System.Drawing.Size(308, 52);
            this.AddCommentText.TabIndex = 1;
            this.AddCommentText.Text = "Inserer votre commentaire ICI";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(749, 461);
            this.Controls.Add(this.LivreBox);
            this.Controls.Add(this.ConnexionBox);
            this.Controls.Add(this.RechercheBox);
            this.Name = "Form1";
            this.Text = "Client Bibiotheque";
            this.LivreBox.ResumeLayout(false);
            this.LivreBox.PerformLayout();
            this.ConnexionBox.ResumeLayout(false);
            this.ConnexionBox.PerformLayout();
            this.RechercheBox.ResumeLayout(false);
            this.RechercheBox.PerformLayout();
            this.AddComment.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox LivreBox;
        private System.Windows.Forms.ListView CommentList;
        private System.Windows.Forms.Label EditeurLabel;
        private System.Windows.Forms.Label ISBNLabel;
        private System.Windows.Forms.Label AuteurLabel;
        private System.Windows.Forms.Label TitreLabel;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox pseudoEdit;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.TextBox passwordEdit;
        private System.Windows.Forms.GroupBox ConnexionBox;
        private System.Windows.Forms.Button ConnexionButton;
        private System.Windows.Forms.GroupBox RechercheBox;
        private System.Windows.Forms.Button RechercheButton;
        private System.Windows.Forms.ComboBox TypeCombo;
        private System.Windows.Forms.TextBox RechercheEdit;
        private System.Windows.Forms.Panel AddComment;
        private System.Windows.Forms.RichTextBox AddCommentText;
        private System.Windows.Forms.Button AddCommentButton;

    }
}

