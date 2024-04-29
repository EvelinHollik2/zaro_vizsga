namespace Admin_felulet
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.Kilepes = new System.Windows.Forms.Button();
            this.bejelentkezes = new System.Windows.Forms.Button();
            this.textBox_nev = new System.Windows.Forms.TextBox();
            this.textBox_jelszo = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // Kilepes
            // 
            this.Kilepes.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.Kilepes.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.Kilepes.ForeColor = System.Drawing.Color.Red;
            this.Kilepes.Location = new System.Drawing.Point(0, 307);
            this.Kilepes.Name = "Kilepes";
            this.Kilepes.Size = new System.Drawing.Size(366, 28);
            this.Kilepes.TabIndex = 2;
            this.Kilepes.Text = "Kilépés";
            this.Kilepes.UseVisualStyleBackColor = true;
            this.Kilepes.Click += new System.EventHandler(this.Kilepes_Click);
            // 
            // bejelentkezes
            // 
            this.bejelentkezes.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.bejelentkezes.Location = new System.Drawing.Point(113, 214);
            this.bejelentkezes.Name = "bejelentkezes";
            this.bejelentkezes.Size = new System.Drawing.Size(144, 52);
            this.bejelentkezes.TabIndex = 3;
            this.bejelentkezes.Text = "Bejelentkezés";
            this.bejelentkezes.UseVisualStyleBackColor = true;
            this.bejelentkezes.Click += new System.EventHandler(this.bejelentkezes_Click);
            // 
            // textBox_nev
            // 
            this.textBox_nev.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox_nev.Location = new System.Drawing.Point(71, 79);
            this.textBox_nev.Name = "textBox_nev";
            this.textBox_nev.Size = new System.Drawing.Size(222, 24);
            this.textBox_nev.TabIndex = 4;
            this.textBox_nev.Text = "Admin";
            // 
            // textBox_jelszo
            // 
            this.textBox_jelszo.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.textBox_jelszo.Location = new System.Drawing.Point(71, 138);
            this.textBox_jelszo.Name = "textBox_jelszo";
            this.textBox_jelszo.Size = new System.Drawing.Size(222, 24);
            this.textBox_jelszo.TabIndex = 5;
            this.textBox_jelszo.Text = "admin";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label1.Location = new System.Drawing.Point(68, 53);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(119, 18);
            this.label1.TabIndex = 6;
            this.label1.Text = "Felhasználó név:";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.label2.Location = new System.Drawing.Point(71, 119);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(56, 18);
            this.label2.TabIndex = 7;
            this.label2.Text = "Jelszó:";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.Linen;
            this.ClientSize = new System.Drawing.Size(366, 335);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.textBox_jelszo);
            this.Controls.Add(this.textBox_nev);
            this.Controls.Add(this.bejelentkezes);
            this.Controls.Add(this.Kilepes);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form1";
            this.Text = "Cats&Dogs_Admin";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Button Kilepes;
        private System.Windows.Forms.Button bejelentkezes;
        private System.Windows.Forms.TextBox textBox_nev;
        private System.Windows.Forms.TextBox textBox_jelszo;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
    }
}

