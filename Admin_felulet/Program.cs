using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto;

namespace Admin_felulet
{
    internal static class Program
    {
        public static Admin admin = null;
        public static int userid;
        public static Database db = new Database();
        public static Rendelesek rendelesek = null;
        public static Szallitasok szallitasok = null;
        public static Termekek termekek = null;
        public static Felhasznalok felhasznalok = null;



        static void Main()
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);
            admin = new Admin();
            Application.Run(new Form1());

            
        }
    }
}
