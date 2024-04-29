using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Asn1.Cmp;

namespace Admin_felulet
{
    public partial class Form1 : Form
    {
        private string text = "Admin";
        private string teex = "admin";
        public Form1()
        {
            InitializeComponent();
        }

        private void bejelentkezes_Click(object sender, EventArgs e)
        {
            
            if (Program.db.validUser(textBox_nev.Text,textBox_jelszo.Text)>=0)
            {
                Program.admin.Show();
            }
            if (textBox_nev.Text != text)
            {
                Close();
            }
            if (textBox_jelszo.Text != teex) 
            {
                MessageBox.Show("Helytelen jelszó!");
            }
        }

        private void Kilepes_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
