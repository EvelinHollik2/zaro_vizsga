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
        public int datum;
        public int sarab;
        public int ar;

        public Rendeles(int userid, int termekid, int datum, int sarab, int ar)
        {
            this.userid = userid;
            this.termekid = termekid;
            this.datum = datum;
            this.sarab = sarab;
            this.ar = ar;
        }
    }
}
