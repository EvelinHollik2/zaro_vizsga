<?php

switch ($menu) {
    case 'kijelentkezes':
        require_once './pages/kijelentkezes.php';
        break;
    case 'kosar':
        require_once './pages/kosar.php';
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
        require_once './pages/Macska.php';
        break;
    case 'Kutya':
        require_once './pages/Kutya.php';
        break;
    case 'ossztermek':
        require_once './pages/ossztermek.php';
        break;
    case 'termekvendeg':
        require_once './pages/termekvendeg.php';
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