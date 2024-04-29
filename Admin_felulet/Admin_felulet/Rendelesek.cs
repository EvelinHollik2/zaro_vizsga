using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto;

namespace Admin_felulet
{
    public partial class Rendelesek : Form
    {
        public Rendelesek()
        {
            InitializeComponent();
        }

        private void listBox_rendeles_SelectedIndexChanged(object sender, EventArgs e)
        {
            updateRendelesLista();
        }

        private void updateRendelesLista()
        {
            listBox_rendeles.Items.Clear();
            listBox_rendeles.Items.AddRange(Program.db.getRendelesek().ToArray());
        }
    }
}
