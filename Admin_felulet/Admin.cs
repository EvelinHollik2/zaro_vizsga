using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Admin_felulet
{
    public partial class Admin : Form
    {
        public Admin()
        {
            InitializeComponent();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void Rendeles_Click(object sender, EventArgs e)
        {
            Program.rendelesek = new Rendelesek();
            Program.rendelesek.Show();
            
        }

        private void szallitas_Click(object sender, EventArgs e)
        {
            Program.szallitasok = new Szallitasok();
            Program.szallitasok.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Program.termekek = new Termekek();
            Program.termekek.Show();
        }

        private void Felhasznalo_Click(object sender, EventArgs e)
        {
            Program.felhasznalok = new Felhasznalok();
            Program.felhasznalok.Show();
        }
    }
}
