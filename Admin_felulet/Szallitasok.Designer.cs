namespace Admin_felulet
{
    partial class Szallitasok
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
            this.listBox_Szallitas = new System.Windows.Forms.ListBox();
            this.button_Torles = new System.Windows.Forms.Button();
            this.button_Modositas = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // button_Vissza
            // 
            this.button_Vissza.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button_Vissza.ForeColor = System.Drawing.Color.Red;
            this.button_Vissza.Location = new System.Drawing.Point(12, 330);
            this.button_Vissza.Name = "button_Vissza";
            this.button_Vissza.Size = new System.Drawing.Size(94, 35);
            this.button_Vissza.TabIndex = 3;
            this.button_Vissza.Text = "Vissza";
            this.button_Vissza.UseVisualStyleBackColor = true;
            this.button_Vissza.Click += new System.EventHandler(this.button_Vissza_Click);
            // 
            // listBox_Szallitas
            // 
            this.listBox_Szallitas.FormattingEnabled = true;
            this.listBox_Szallitas.Location = new System.Drawing.Point(12, 25);
            this.listBox_Szallitas.Name = "listBox_Szallitas";
            this.listBox_Szallitas.Size = new System.Drawing.Size(614, 251);
            this.listBox_Szallitas.TabIndex = 2;
            this.listBox_Szallitas.SelectedIndexChanged += new System.EventHandler(this.listBox_Szallitas_SelectedIndexChanged);
            // 
            // button_Torles
            // 
            this.button_Torles.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button_Torles.Location = new System.Drawing.Point(264, 330);
            this.button_Torles.Name = "button_Torles";
            this.button_Torles.Size = new System.Drawing.Size(95, 35);
            this.button_Torles.TabIndex = 9;
            this.button_Torles.Text = "Törlés";
            this.button_Torles.UseVisualStyleBackColor = true;
            // 
            // button_Modositas
            // 
            this.button_Modositas.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.button_Modositas.Location = new System.Drawing.Point(524, 330);
            this.button_Modositas.Name = "button_Modositas";
            this.button_Modositas.Size = new System.Drawing.Size(102, 35);
            this.button_Modositas.TabIndex = 8;
            this.button_Modositas.Text = "Módosítás";
            this.button_Modositas.UseVisualStyleBackColor = true;
            // 
            // Szallitasok
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1135, 427);
            this.Controls.Add(this.button_Torles);
            this.Controls.Add(this.button_Modositas);
            this.Controls.Add(this.button_Vissza);
            this.Controls.Add(this.listBox_Szallitas);
            this.Name = "Szallitasok";
            this.Text = "Szallitasok";
            this.Load += new System.EventHandler(this.Szallitasok_Load);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button button_Vissza;
        private System.Windows.Forms.ListBox listBox_Szallitas;
        private System.Windows.Forms.Button button_Torles;
        private System.Windows.Forms.Button button_Modositas;
    }
}