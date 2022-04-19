<?php
//require '../Modules/Categories.php';
//require '../Modules/Products.php';
// require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Anytime Fitness";
$titleSuffix = "";

switch ($params[1]) {
    case 'home':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
    case 'Menu':
        $titleSuffix = ' | Menu';
        include_once "../Templates/Menu.php";
        break;
    case 'contact':
        $titleSuffix = ' | contact';
        include_once "../Templates/contact.php";
        break;
    case 'login':
            $titleSuffix = ' | login';
            include_once "../Templates/login.php";
            break;
    case 'serveerster':
            $titleSuffix = ' | serveerster';
             include_once "../Templates/serveerster.php";
             break;
    case 'bestellingen':
            $titleSuffix = ' | bestellingen';
            include_once "../Templates/bestellingen.php";
             break;
    case 'serveersterhome':
                $titleSuffix = ' | serveersterhome';
                include_once "../Templates/serveersterhome.php";
                 break;
                 case 'reservering':
                    $titleSuffix = ' | reservering';
                    include_once "../Templates/reservering.php";
                     break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
