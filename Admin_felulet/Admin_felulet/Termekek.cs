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
    public partial class Termekek : Form
    {
        public Termekek()
        {
            InitializeComponent();
        }

        private void button_Vissza_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void Termekek_Load(object sender, EventArgs e)
        {
            updateTermekLista();
        }

        private void listBox_Termek_SelectedIndexChanged(object sender, EventArgs e)
        {
            updateTermekLista();
        }

        private void updateTermekLista()
        {
            listBox_Termek.Items.Clear();
            listBox_Termek.Items.AddRange(Program.db.getTermek().ToArray());
        }
    }
}
