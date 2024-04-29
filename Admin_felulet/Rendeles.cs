using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Crypto;

namespace Admin_felulet
{
    internal class Rendeles
    {
        public int userid;
        public int termekid;
        public DateTime datum;
        public int darab;
        public int ar;

        public Rendeles(int userid, int termekid, DateTime datum, int darab, int ar)
        {
            this.userid = userid;
            this.termekid = termekid;
            this.datum = datum;
            this.darab = darab;
            this.ar = ar;
        }
        public override string ToString()
        {
            return $"ID:{userid} Termék ID:{termekid} rendelési dátum:{datum} darabszám:{darab} Ára:{ar}";
        }
    }
}
