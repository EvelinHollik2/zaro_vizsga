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
    public partial class Szallitasok : Form
    {
        public Szallitasok()
        {
            InitializeComponent();
        }

        private void listBox_Szallitas_SelectedIndexChanged(object sender, EventArgs e)
        {
            updateSzallitasLista();
        }

        private void updateSzallitasLista()
        {
            listBox_Szallitas.Items.Clear();
            listBox_Szallitas.Items.AddRange(Program.db.getSzallitas().ToArray());
        }

        private void Szallitasok_Load(object sender, EventArgs e)
        {
            updateSzallitasLista();
        }

        private void button_Vissza_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
