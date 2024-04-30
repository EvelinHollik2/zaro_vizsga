using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto;

namespace Admin_felulet
{
    internal class Szallitas
    {
        //SELECT `userid`,`irszam`,`telepules`,`utca`,`hazszam`,`emelet`,`telefonszam` FROM `szallitas`
        public int userid;
        public int irszam;
        public string telepules;
        public string utca;
        public int hazszam;
        public string emelet;
        public string telefonszam;

        public Szallitas(int userid, int irszam, string telepules, string utca, int hazszam, string emelet, string telefonszam)
        {
            this.userid = userid;
            this.irszam = irszam;
            this.telepules = telepules;
            this.utca = utca;
            this.hazszam = hazszam;
            this.emelet = emelet;
            this.telefonszam = telefonszam;
        }
        public override string ToString()
        {
            return $"ID:{userid} Irányító szám:{irszam} Település:{telepules} Utca:{utca} Házszám:{hazszam} Emelet:{emelet} Telefonszám:{telefonszam}";
        }

    }
}
