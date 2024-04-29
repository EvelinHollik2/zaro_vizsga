using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace Admin_felulet
{

    internal class Database
    {
        MySqlConnection connection;
        MySqlCommand command;

        public Database()
        {
            MySqlConnectionStringBuilder builder = new MySqlConnectionStringBuilder();
            builder.Server = "localhost";
            builder.UserID = "root";
            builder.Password = "";
            builder.Database = "webshop";
            builder.CharacterSet = "utf8";
            connection = new MySqlConnection(builder.ConnectionString);
            command = connection.CreateCommand();
            try
            {
                nyit();

                zar();
            }
            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
                Environment.Exit(0);
            }
        }

        private void zar()
        {
            if (connection.State != System.Data.ConnectionState.Closed)
            {
                connection.Close();
            }
        }

        private void nyit()
        {
            if (connection.State != System.Data.ConnectionState.Open)
            {
                connection.Open();
            }
        }

        public List<Rendeles> getRendelesek()
        {
            nyit();
            List<Rendeles> rendeles = new List<Rendeles>();
            command.CommandText = "SELECT `userid`,`termekid`,`datum`,`darab`,`ar` FROM `rendeles`";
            using (MySqlDataReader dr = command.ExecuteReader())
            {
                while (dr.Read())
                {
                    rendeles.Add(new Rendeles(dr.GetInt32("userid"), dr.GetInt32("termekid"), dr.GetInt32("datum"), dr.GetInt32("darab"), dr.GetInt32("ar")));
                }
            }
            zar();
            return rendeles;
        }

        public int validUser(string name, string pass)
        {
            int userid = -1;
            nyit();
            command.CommandText = "SELECT users.password, users.userid FROM users WHERE users.username=@nev";
            command.Parameters.Clear();
            command.Parameters.AddWithValue("@nev", name);
            MySqlDataReader reader = command.ExecuteReader();
            if (reader.Read())
            {
                string taroltJelszo = reader.GetString("password");
                if (taroltJelszo.Equals(pass))
                {
                    userid = reader.GetInt32("userid");
                }
            }
            zar();
            return userid;

        }
    }
}
