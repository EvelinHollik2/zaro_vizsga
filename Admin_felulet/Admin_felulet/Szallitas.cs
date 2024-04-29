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
        public string hazszam;
        public string emelet;
        public int telefonszam;

        public Szallitas(int userid, int irszam, string telepules, string utca, string hazszam, string emelet, int telefonszam)
        {
            this.userid = userid;
            this.irszam = irszam;
            this.telepules = telepules;
            this.utca = utca;
            this.hazszam = hazszam;
            this.emelet = emelet;
            this.telefonszam = telefonszam;
        }
    }
}
