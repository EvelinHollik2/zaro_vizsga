namespace Admin_felulet
{
    partial class Felhasznalok
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
            this.button_Vissza = new System.Windows.Forms.Button();
            this.listBox_Felhasznalo = new System.Windows.Forms.ListBox();
            this.button_Torles = new System.Windows.Forms.Button();
            this.button_Modositas = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // button_Vissza
            // 
            this.button_Vissza.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button_Vissza.ForeColor = System.Drawing.Color.Red;
            this.button_Vissza.Location = new System.Drawing.Point(12, 321);
            this.button_Vissza.Name = "button_Vissza";
            this.button_Vissza.Size = new System.Drawing.Size(92, 35);
            this.button_Vissza.TabIndex = 7;
            this.button_Vissza.Text = "Vissza";
            this.button_Vissza.UseVisualStyleBackColor = true;
            this.button_Vissza.Click += new System.EventHandler(this.button_Vissza_Click);
            // 
            // listBox_Felhasznalo
            // 
            this.listBox_Felhasznalo.FormattingEnabled = true;
            this.listBox_Felhasznalo.Location = new System.Drawing.Point(12, 12);
            this.listBox_Felhasznalo.Name = "listBox_Felhasznalo";
            this.listBox_Felhasznalo.Size = new System.Drawing.Size(614, 251);
            this.listBox_Felhasznalo.TabIndex = 6;
            this.listBox_Felhasznalo.SelectedIndexChanged += new System.EventHandler(this.listBox_Felhasznalo_SelectedIndexChanged);
            // 
            // button_Torles
            // 
            this.button_Torles.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button_Torles.Location = new System.Drawing.Point(264, 321);
            this.button_Torles.Name = "button_Torles";
            this.button_Torles.Size = new System.Drawing.Size(95, 35);
            this.button_Torles.TabIndex = 9;
            this.button_Torles.Text = "Törlés";
            this.button_Torles.UseVisualStyleBackColor = true;
            // 
            // button_Modositas
            // 
            this.button_Modositas.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button_Modositas.Location = new System.Drawing.Point(524, 321);
            this.button_Modositas.Name = "button_Modositas";
            this.button_Modositas.Size = new System.Drawing.Size(102, 35);
            this.button_Modositas.TabIndex = 8;
            this.button_Modositas.Text = "Módosítás";
            this.button_Modositas.UseVisualStyleBackColor = true;
            // 
            // Felhasznalok
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(957, 402);
            this.Controls.Add(this.button_Torles);
            this.Controls.Add(this.button_Modositas);
            this.Controls.Add(this.button_Vissza);
            this.Controls.Add(this.listBox_Felhasznalo);
            this.Name = "Felhasznalok";
            this.Text = "Felhasznalok";
            this.Load += new System.EventHandler(this.Felhasznalok_Load);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button button_Vissza;
        private System.Windows.Forms.ListBox listBox_Felhasznalo;
        private System.Windows.Forms.Button button_Torles;
        private System.Windows.Forms.Button button_Modositas;
    }
}