namespace BibliothequaireFram
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
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.AdminBox = new System.Windows.Forms.TabControl();
            this.tabPage1 = new System.Windows.Forms.TabPage();
            this.button1 = new System.Windows.Forms.Button();
            this.passwordAbonneEdit = new System.Windows.Forms.TextBox();
            this.nomAbonneeEdit = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.tabPage2 = new System.Windows.Forms.TabPage();
            this.EditeurEdit = new System.Windows.Forms.TextBox();
            this.AuteurEdit = new System.Windows.Forms.TextBox();
            this.titreEdit = new System.Windows.Forms.TextBox();
            this.button2 = new System.Windows.Forms.Button();
            this.label8 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.passwordEdit = new System.Windows.Forms.TextBox();
            this.pseudoEdit = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.ConnexionButton = new System.Windows.Forms.Button();
            this.ISBN13Edit = new System.Windows.Forms.TextBox();
            this.groupBox1.SuspendLayout();
            this.AdminBox.SuspendLayout();
            this.tabPage1.SuspendLayout();
            this.tabPage2.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.AdminBox);
            this.groupBox1.Controls.Add(this.passwordEdit);
            this.groupBox1.Controls.Add(this.pseudoEdit);
            this.groupBox1.Controls.Add(this.label2);
            this.groupBox1.Controls.Add(this.label1);
            this.groupBox1.Controls.Add(this.ConnexionButton);
            this.groupBox1.Location = new System.Drawing.Point(72, 32);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(548, 358);
            this.groupBox1.TabIndex = 0;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "groupBox1";
            // 
            // AdminBox
            // 
            this.AdminBox.Controls.Add(this.tabPage1);
            this.AdminBox.Controls.Add(this.tabPage2);
            this.AdminBox.Location = new System.Drawing.Point(27, 30);
            this.AdminBox.Name = "AdminBox";
            this.AdminBox.SelectedIndex = 0;
            this.AdminBox.Size = new System.Drawing.Size(500, 280);
            this.AdminBox.TabIndex = 5;
            this.AdminBox.Visible = false;
            // 
            // tabPage1
            // 
            this.tabPage1.Controls.Add(this.button1);
            this.tabPage1.Controls.Add(this.passwordAbonneEdit);
            this.tabPage1.Controls.Add(this.nomAbonneeEdit);
            this.tabPage1.Controls.Add(this.label4);
            this.tabPage1.Controls.Add(this.label3);
            this.tabPage1.Location = new System.Drawing.Point(4, 22);
            this.tabPage1.Name = "tabPage1";
            this.tabPage1.Padding = new System.Windows.Forms.Padding(3);
            this.tabPage1.Size = new System.Drawing.Size(492, 254);
            this.tabPage1.TabIndex = 0;
            this.tabPage1.Text = "Ajouter un Abonnée";
            this.tabPage1.UseVisualStyleBackColor = true;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(211, 127);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(178, 23);
            this.button1.TabIndex = 4;
            this.button1.Text = "Ajouter Abonnée";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // passwordAbonneEdit
            // 
            this.passwordAbonneEdit.Location = new System.Drawing.Point(211, 75);
            this.passwordAbonneEdit.Name = "passwordAbonneEdit";
            this.passwordAbonneEdit.Size = new System.Drawing.Size(178, 20);
            this.passwordAbonneEdit.TabIndex = 3;
            // 
            // nomAbonneeEdit
            // 
            this.nomAbonneeEdit.Location = new System.Drawing.Point(211, 42);
            this.nomAbonneeEdit.Name = "nomAbonneeEdit";
            this.nomAbonneeEdit.Size = new System.Drawing.Size(178, 20);
            this.nomAbonneeEdit.TabIndex = 2;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(60, 75);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(72, 13);
            this.label4.TabIndex = 1;
            this.label4.Text = "Mot de Passe";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(60, 42);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(82, 13);
            this.label3.TabIndex = 0;
            this.label3.Text = "Nom d\'abonnée";
            // 
            // tabPage2
            // 
            this.tabPage2.Controls.Add(this.ISBN13Edit);
            this.tabPage2.Controls.Add(this.EditeurEdit);
            this.tabPage2.Controls.Add(this.AuteurEdit);
            this.tabPage2.Controls.Add(this.titreEdit);
            this.tabPage2.Controls.Add(this.button2);
            this.tabPage2.Controls.Add(this.label8);
            this.tabPage2.Controls.Add(this.label7);
            this.tabPage2.Controls.Add(this.label6);
            this.tabPage2.Controls.Add(this.label5);
            this.tabPage2.Location = new System.Drawing.Point(4, 22);
            this.tabPage2.Name = "tabPage2";
            this.tabPage2.Padding = new System.Windows.Forms.Padding(3);
            this.tabPage2.Size = new System.Drawing.Size(492, 254);
            this.tabPage2.TabIndex = 1;
            this.tabPage2.Text = "Ajouter Livre";
            this.tabPage2.UseVisualStyleBackColor = true;
            // 
            // EditeurEdit
            // 
            this.EditeurEdit.Location = new System.Drawing.Point(195, 103);
            this.EditeurEdit.Name = "EditeurEdit";
            this.EditeurEdit.Size = new System.Drawing.Size(189, 20);
            this.EditeurEdit.TabIndex = 8;
            // 
            // AuteurEdit
            // 
            this.AuteurEdit.Location = new System.Drawing.Point(195, 68);
            this.AuteurEdit.Name = "AuteurEdit";
            this.AuteurEdit.Size = new System.Drawing.Size(189, 20);
            this.AuteurEdit.TabIndex = 7;
            // 
            // titreEdit
            // 
            this.titreEdit.Location = new System.Drawing.Point(195, 39);
            this.titreEdit.Name = "titreEdit";
            this.titreEdit.Size = new System.Drawing.Size(189, 20);
            this.titreEdit.TabIndex = 6;
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(221, 203);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(163, 23);
            this.button2.TabIndex = 5;
            this.button2.Text = "Ajouter Livre";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Location = new System.Drawing.Point(44, 136);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(44, 13);
            this.label8.TabIndex = 3;
            this.label8.Text = "ISBN13";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Location = new System.Drawing.Point(44, 105);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(40, 13);
            this.label7.TabIndex = 2;
            this.label7.Text = "Editeur";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(44, 72);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(38, 13);
            this.label6.TabIndex = 1;
            this.label6.Text = "Auteur";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(44, 43);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(28, 13);
            this.label5.TabIndex = 0;
            this.label5.Text = "Titre";
            // 
            // passwordEdit
            // 
            this.passwordEdit.Location = new System.Drawing.Point(200, 124);
            this.passwordEdit.Name = "passwordEdit";
            this.passwordEdit.Size = new System.Drawing.Size(183, 20);
            this.passwordEdit.TabIndex = 4;
            this.passwordEdit.UseSystemPasswordChar = true;
            // 
            // pseudoEdit
            // 
            this.pseudoEdit.Location = new System.Drawing.Point(200, 88);
            this.pseudoEdit.Name = "pseudoEdit";
            this.pseudoEdit.Size = new System.Drawing.Size(183, 20);
            this.pseudoEdit.TabIndex = 3;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(57, 124);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(72, 13);
            this.label2.TabIndex = 2;
            this.label2.Text = "Mot de Passe";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(57, 88);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(43, 13);
            this.label1.TabIndex = 1;
            this.label1.Text = "Pseudo";
            // 
            // ConnexionButton
            // 
            this.ConnexionButton.Location = new System.Drawing.Point(354, 329);
            this.ConnexionButton.Name = "ConnexionButton";
            this.ConnexionButton.Size = new System.Drawing.Size(188, 23);
            this.ConnexionButton.TabIndex = 0;
            this.ConnexionButton.Text = "Connexion";
            this.ConnexionButton.UseVisualStyleBackColor = true;
            this.ConnexionButton.Click += new System.EventHandler(this.ConnexionButton_Click);
            // 
            // ISBN13Edit
            // 
            this.ISBN13Edit.Location = new System.Drawing.Point(195, 133);
            this.ISBN13Edit.Name = "ISBN13Edit";
            this.ISBN13Edit.Size = new System.Drawing.Size(189, 20);
            this.ISBN13Edit.TabIndex = 9;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(663, 420);
            this.Controls.Add(this.groupBox1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.AdminBox.ResumeLayout(false);
            this.tabPage1.ResumeLayout(false);
            this.tabPage1.PerformLayout();
            this.tabPage2.ResumeLayout(false);
            this.tabPage2.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.TextBox passwordEdit;
        private System.Windows.Forms.TextBox pseudoEdit;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button ConnexionButton;
        private System.Windows.Forms.TabControl AdminBox;
        private System.Windows.Forms.TabPage tabPage1;
        private System.Windows.Forms.TabPage tabPage2;
        private System.Windows.Forms.TextBox nomAbonneeEdit;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox passwordAbonneEdit;
        private System.Windows.Forms.TextBox EditeurEdit;
        private System.Windows.Forms.TextBox AuteurEdit;
        private System.Windows.Forms.TextBox titreEdit;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.TextBox ISBN13Edit;
    }
}

