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
    public partial class Felhasznalok : Form
    {
        public Felhasznalok()
        {
            InitializeComponent();
        }

        private void listBox_Felhasznalo_SelectedIndexChanged(object sender, EventArgs e)
        {
            updateFelhasznaloLista();
        }

        private void updateFelhasznaloLista()
        {
            listBox_Felhasznalo.Items.Clear();
            listBox_Felhasznalo.Items.AddRange(Program.db.getFelhasznalo().ToArray());
        }

        private void Felhasznalok_Load(object sender, EventArgs e)
        {
            updateFelhasznaloLista();
        }

        private void button_Vissza_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
