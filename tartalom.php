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
    case 'home':
        require_once './pages/home.php';
        break;
    case 'body':
        require_once './pages/body.php';
        break;
    case 'kutya':
        require_once './pages/kutya.php';
        break;
    case 'macska':
        require_once './pages/macska.php';
        break;
    case 'kutyavendeg':
        require_once './pages/kutyavendeg.php';
        break;
    case 'macskavendeg':
        require_once './pages/macskavendeg.php';
        break;
    case 'payment':
        require_once './pages/payment.php';
        break;
    default:
        require_once './index.php';
        break;
}