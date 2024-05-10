<?php

class Database {

    private $db = null;
    public $errormessage = "";
    private $error = false;

    public function __construct($host, $username, $pass, $db) {
        $this->db = new mysqli($host, $username, $pass, $db);
    }

    public function login($username, $pass) {
        //-- jelezzük a végrehajtandó SQL parancsot 
        $stmt = $this->db->prepare('SELECT * FROM users WHERE users.username LIKE ?;');
        //-- elküdjük a végrehajtáshoz szükséges adatokat
        $stmt->bind_param("s", $username);
        if ($stmt->execute()) {
            //-- sikeres végrehajtás után lekérjük az adatokat
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            //var_dump(password_hash($pass, PASSWORD_ARGON2I));
            //var_dump($row, $pass);
            if ($pass == $row['password']) {
                //-- felhasználónév és jelszó helyes
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['login'] = true;

                return true;
            }
        } else {
            $_SESSION['username'] = '';
            $_SESSION['login'] = false;
            return false;
        }
        // Free result set
        $result->free_result();
        return false;
    }

    /* email ellenörző @ */

    public function regist($username, $email, $pass) {
        $stmt = $this->db->prepare("INSERT INTO `users`(`userid`, `username`, `email`, `password`) VALUES (NULL,?,?,?)");
        $stmt->bind_param("sss", $username, $email, $pass);

        try {
            if ($stmt->execute()) {
                $_SESSION['login'] = true;
                header("location: index.php");
            }
        } catch (Exception $e) {

            echo 'Error: ' . $e->getMessage();
        }
    }

    public function szallit($irszam, $telepules, $utca, $hazszam, $emelet, $telefonszam) {
        $stmt = $this->db->prepare("INSERT INTO `szallitas`(`userid`, `irszam`, `telepules`, `utca`, `hazszam`, `emelet`, `telefonszam`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("iississ", $_SESSION["userid"], $irszam, $telepules, $utca, $hazszam, $emelet, $telefonszam);
        try {
            if ($stmt->execute()) {
                $_SESSION['irszam'] = $irszam;
                $_SESSION['telepules'] = $telepules;
                $_SESSION['utca'] = $utca;
                $_SESSION['hazszam'] = $hazszam;
                $_SESSION['emelet'] = $emelet;
                $_SESSION['telefonszam'] = $telefonszam;
            } else {
                $_SESSION['irszam'] = "";
                $_SESSION['telepules'] = "";
                $_SESSION['utca'] = "";
                $_SESSION['hazszam'] = "";
                $_SESSION['emelet'] = "";
                $_SESSION['telefonszam'] = "";
            }
        } catch (Exception $e) {

            echo 'Error: ' . $e->getMessage();
        }
    }

    public function szalladat() {
        $stmt = $this->db->prepare("SELECT * FROM `szallitas` NATURAL JOIN users WHERE userid like ?;");
        $stmt->bind_param("i", $_SESSION["userid"]);
        try {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                $_SESSION['irszam'] = $row['irszam'];
                $_SESSION['telepules'] = $row['telepules'];
                $_SESSION['utca'] = $row['utca'];
                $_SESSION['hazszam'] = $row['hazszam'];
                $_SESSION['emelet'] = $row['emelet'];
                $_SESSION['telefonszam'] = $row['telefonszam'];
            }
        } catch (Exception $e) {

            echo 'Error: ' . $e->getMessage();
        }
    }
    
    public function Termekek() {
        $result = $this->db->query("SELECT * FROM `termekek`");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* Kutya termékek */

    public function KTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'kutya';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function KPTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'kutya' AND kollekcio = 'polok';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function KKTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'kutya' AND `kollekcio` = 'kabátok';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function KKiegTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'kutya' AND `kollekcio` = 'kiegészítő';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function KPulTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'kutya' AND `kollekcio` = 'pulóverek';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function KRTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'kutya' AND `kollekcio` = 'ruhák';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* Macska termékek */

    public function MTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'macska';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function MPTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'macska' AND `kollekcio`= 'polok';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function MKTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'macska' AND `kollekcio` = 'kabátok';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function MKiegTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'macska' AND kollekcio = 'kiegészítő';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function MPulTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'macska' AND kollekcio = 'pulóverek';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function MRTermekek() {
        $result = $this->db->query("SELECT * FROM `termekek` WHERE `fajta` = 'macska' AND `kollekcio` = 'ruhák';");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //fiók módosítása
    public function Profil() {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username LIKE ?;"); //-- megmondjuk mit akarunk
        $username = '%' . $_SESSION['username'] . '%';
        $stmt->bind_param("s", $username); //-- átadjuk az adatokat
        $stmt->execute(); //-- végrehajtatjuk
        $result = $stmt->get_result(); //-- lekérjük az eredményt
        return $result->fetch_assoc();
    }

    public function Kosar() {
        $stmt = $this->db->prepare("SELECT * FROM termekek WHERE termekid LIKE ?;");
        $stmt->bind_param("s", $_SESSION['termekid']);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    /* profil edit */

    public function UserEdit($username, $email, $passNew, $passOld) {
        $olduserName = $_SESSION['username'];
        if (empty($username)) {
            $username = $_SESSION['username'];
        } else if ($this->validUsername($username)) {
            $username = $username;
        } else {
            return false;
        }

        if (empty($email)) {
            $email = $_SESSION['email'];
        }
        if (!$this->validEmail($email)) {
            return false;
        }

        if (empty($passNew)) {
            $passNew = $passOld;
        } else if (!$this->validPass($passNew)) {
            return false;
        }


        if ($this->error) {
            return false;
        }
        $stmt = $this->db->prepare('UPDATE users SET username=?, email=?,password=? WHERE username=?');
        $stmt->bind_param('ssss', $username, $email, $passNew, $olduserName);
        if ($stmt->execute()) {
            //-- sikeres végrehajtás után lekérjük az adatokat
            $row = $this->Profil();
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['password'] = $row['password'];
        }
        return true;
    }

    function validUsername($param) {
        //-- üres?
        $valid = true;

        //-- minimális hossz?
        if (strlen($param) < 3) {
            $valid = false;
            $this->error = true;
            $this->errormessage = "Legalább 3 karakter kell";
        }
        return $valid;
    }

    function validEmail($param) {
        return filter_var($param, FILTER_VALIDATE_EMAIL);
    }

    function validPass($param) {
        //-- elfogadható karakterek: #@&  preg_match()
        $valid = true;

        //-- minimális hossz?
        if (strlen($param) < 3) {
            $valid = false;
            $this->error = true;
            $this->errormessage = "Jelszó 3 karakter kell";
        }
        return $valid;
    }
}
