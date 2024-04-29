using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto;

namespace Admin_felulet
{
    internal class Felhasznalo
    {
        //SELECT `userid`,`username`,`email`,`password` FROM `users`
        public int userid;
        public string username;
        public string email;
        public string password;

        public Felhasznalo(int userid, string username, string email, string password)
        {
            this.userid = userid;
            this.username = username;
            this.email = email;
            this.password = password;
        }
        public override string ToString()
        {
            return $"Felhasználó Id:{userid} Felhasználó név:{username} Email cím:{email} Jelszó:{password}";
        }

    }
}
