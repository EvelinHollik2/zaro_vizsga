using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Admin_felulet
{
    internal class Termek
    {
        public int termekid;
        public string termeknev;
        public int termekdb;
        public int termekar;
        public string fajta;
        public string kollekcio;

        public Termek(int termekid, string termeknev, int termekdb, int termekar, string fajta, string kollekcio)
        {
            this.termekid = termekid;
            this.termeknev = termeknev;
            this.termekdb = termekdb;
            this.termekar = termekar;
            this.fajta = fajta;
            this.kollekcio = kollekcio;
        }
        public override string ToString()
        {
            return this.termeknev;
        }
    }
}
