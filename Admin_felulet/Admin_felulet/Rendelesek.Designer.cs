namespace Admin_felulet
{
    partial class Rendelesek
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
            this.listBox_rendeles = new System.Windows.Forms.ListBox();
            this.SuspendLayout();
            // 
            // listBox_rendeles
            // 
            this.listBox_rendeles.FormattingEnabled = true;
            this.listBox_rendeles.Location = new System.Drawing.Point(51, 27);
            this.listBox_rendeles.Name = "listBox_rendeles";
            this.listBox_rendeles.Size = new System.Drawing.Size(319, 186);
            this.listBox_rendeles.TabIndex = 0;
            this.listBox_rendeles.SelectedIndexChanged += new System.EventHandler(this.listBox_rendeles_SelectedIndexChanged);
            // 
            // Rendelesek
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.listBox_rendeles);
            this.Name = "Rendelesek";
            this.Text = "Rendelesek";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.ListBox listBox_rendeles;
    }
}