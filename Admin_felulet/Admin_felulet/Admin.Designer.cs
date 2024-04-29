namespace Admin_felulet
{
    partial class Admin
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
            this.Rendeles = new System.Windows.Forms.Button();
            this.szallitas = new System.Windows.Forms.Button();
            this.Felhasznalo = new System.Windows.Forms.Button();
            this.button4 = new System.Windows.Forms.Button();
            this.button5 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // Rendeles
            // 
            this.Rendeles.Location = new System.Drawing.Point(56, 80);
            this.Rendeles.Name = "Rendeles";
            this.Rendeles.Size = new System.Drawing.Size(112, 55);
            this.Rendeles.TabIndex = 4;
            this.Rendeles.Text = "Rendelés";
            this.Rendeles.UseVisualStyleBackColor = true;
            this.Rendeles.Click += new System.EventHandler(this.Rendeles_Click);
            // 
            // szallitas
            // 
            this.szallitas.Location = new System.Drawing.Point(56, 154);
            this.szallitas.Name = "szallitas";
            this.szallitas.Size = new System.Drawing.Size(112, 55);
            this.szallitas.TabIndex = 5;
            this.szallitas.Text = "Szállítás";
            this.szallitas.UseVisualStyleBackColor = true;
            // 
            // Felhasznalo
            // 
            this.Felhasznalo.Location = new System.Drawing.Point(253, 154);
            this.Felhasznalo.Name = "Felhasznalo";
            this.Felhasznalo.Size = new System.Drawing.Size(112, 55);
            this.Felhasznalo.TabIndex = 7;
            this.Felhasznalo.Text = "Felhasználók";
            this.Felhasznalo.UseVisualStyleBackColor = true;
            // 
            // button4
            // 
            this.button4.Location = new System.Drawing.Point(253, 80);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(112, 55);
            this.button4.TabIndex = 6;
            this.button4.Text = "Termékek";
            this.button4.UseVisualStyleBackColor = true;
            // 
            // button5
            // 
            this.button5.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.button5.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button5.ForeColor = System.Drawing.Color.Red;
            this.button5.Location = new System.Drawing.Point(0, 303);
            this.button5.Name = "button5";
            this.button5.Size = new System.Drawing.Size(425, 32);
            this.button5.TabIndex = 8;
            this.button5.Text = "Kilépés";
            this.button5.UseVisualStyleBackColor = true;
            this.button5.Click += new System.EventHandler(this.button5_Click);
            // 
            // Admin
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(425, 335);
            this.Controls.Add(this.button5);
            this.Controls.Add(this.Felhasznalo);
            this.Controls.Add(this.button4);
            this.Controls.Add(this.szallitas);
            this.Controls.Add(this.Rendeles);
            this.Name = "Admin";
            this.Text = "admin";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button Rendeles;
        private System.Windows.Forms.Button szallitas;
        private System.Windows.Forms.Button Felhasznalo;
        private System.Windows.Forms.Button button4;
        private System.Windows.Forms.Button button5;
    }
}