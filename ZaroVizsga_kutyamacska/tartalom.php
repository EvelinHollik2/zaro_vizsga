<?php

switch ($menu) {
    case 'kijelentkezes':
        require_once './pages/kijelentkezes.php';
        break;
    case 'kosar':
        require_once './pages/kosarTartalomMegjelenitese.php';
        break;
    case 'bejelentkezes':
        require_once './pages/bejelentkezes.php';
        break;
    case 'regisztracio':
        require_once './pages/regisztracio.php';
        break;
    case 'body':
        require_once './pages/body.php';
        break;
    case 'termekek':
        require_once './pages/termekek.php';
        break;
    
    case 'Macska':
        require_once './pages/Macska/Macska.php';
        break;
    case 'macskakabat':
        require_once './pages/Macska/macskakabat.php';
        break;
    case 'macskakiegeszito':
        require_once './pages/Macska/macskakiegeszito.php';
        break;
    case 'macskapolo':
        require_once './pages/Macska/macskapolo.php';
        break;
    case 'macskapulover':
        require_once './pages/Macska/macskapolo.php';
        break;
    case 'macskaruha':
        require_once './pages/Macska/macskaruha.php';
        break;
    case 'osszmacska':
        require_once './pages/Macska/osszmacska.php';
        break;
    
    case 'Kutya':
        require_once './pages/Kutya/Kutya.php';
        break;
    case 'kutyapolo':
        require_once './pages/Kutya/kutyapolo.php';
        break;
    case 'kutyakabat':
        require_once './pages/Kutya/kutyakabat.php';
        break;
    case 'kutyakiegeszito':
        require_once './pages/Kutya/kutyakiegeszito.php';
        break;
    case 'kutyapulover':
        require_once './pages/Kutya/kutyapulover.php';
        break;
    case 'kutyaruha':
        require_once './pages/Kutya/kutyaruha.php';
        break;
    case 'osszkutya':
        require_once './pages/Kutya/osszkutya.php';
        break;
    
    case 'ossztermek':
        require_once './pages/ossztermek.php';
        break;
    
    case 'termekvendeg':
        require_once './pages/Vendég/termekvendeg.php';
        break;
    /*Vendég macska*/
    case 'VendegMacska':
        require_once './pages/Macska/VendegMacska.php';
        break;
    case 'macskakabat':
        require_once './pages/Macska/Vendegmacskakabat.php';
        break;
    case 'Vendegmacskakiegeszito':
        require_once './pages/Macska/Vendegmacskakiegeszito.php';
        break;
    case 'Vendegmacskapolo':
        require_once './pages/Macska/Vendegmacskapolo.php';
        break;
    case 'Vendegmacskapulover':
        require_once './pages/Macska/Vendegmacskapolo.php';
        break;
    case 'Vendegmacskaruha':
        require_once './pages/Macska/Vendegmacskaruha.php';
        break;
    case 'Vendegosszmacska':
        require_once './pages/Macska/Vendegosszmacska.php';
        break;
    /*Vendég kutya*/
    case 'VendegKutya':
        require_once './pages/Kutya/VendegKutya.php';
        break;
    case 'Vendegkutyapolo':
        require_once './pages/Kutya/Vendegkutyapolo.php';
        break;
    case 'Vendegkutyakabat':
        require_once './pages/Kutya/Vendegkutyakabat.php';
        break;
    case 'Vendegkutyakiegeszito':
        require_once './pages/Kutya/Vendegkutyakiegeszito.php';
        break;
    case 'Vendegkutyapulover':
        require_once './pages/Kutya/Vendegkutyapulover.php';
        break;
    case 'Vendegkutyaruha':
        require_once './pages/Kutya/Vendegkutyaruha.php';
        break;
    case 'Vendegosszkutya':
        require_once './pages/Kutya/Vendegosszkutya.php';
        break;
    
    
    case 'buy':
        require_once './pages/buy.php';
        break;
    case 'payment':
        require_once './pages/payment.php';
        break;
    case 'Profil':
        require_once './pages/Profil.php';
        break;
    case 'profil_szerkesztes':
        require_once './pages/profil_szerkesztes.php';
        break;
    default:
        require_once './pages/home.php';
        break;
}