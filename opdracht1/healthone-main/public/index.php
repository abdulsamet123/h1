<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
include_once '../Modules/review.php';
include_once '../Modules/Login.php';
require '../Modules/contact.php';


session_start();


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";
global $message;

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";

        break;

    case 'category':
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);
            include_once "../templates/products.php";

        }
        break;

    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $titleSuffix = ' | ' . $product->name;
            $reviews=getReview($productId);

            include_once "../Templates/product.php";
        }
        break;
        case 'login';
        $titleSuffix='| login';
        if (isset($_POST['login'])){

            $result = checkLogin();
            switch ($result){
                case'ADMIN':
                    header("location:/admin/home");
                    break;
                case 'MEMBER':
                    header("location:/member/home");
                    break;
                case 'FAILURE':
                    $message = "Email of password is miet correct ingevuld";
                    include_once "../Templates/login.php";
                    break;
                case 'INCOMPLETE':
                    $message ="Formulier niet volledig ingvuld";
                    include_once "../Templates/login.php";
                    break;
            }
        }
        else{
            include_once "../Templates/login.php";
        }
         break;
    case 'review':
        if(isset($_GET['id'])) {
            $productId=$_GET['id'];
            $product = getProduct($productId);
            if(isset($_POST['verzenden'])) {
                //var_dump($_POST);
                $stars = $_POST['stars'];
                $description = $_POST['description'];
                saveReview($description,$stars,$productId);
                $reviews=getReview($productId);
                include_once "../Templates/product.php";

            } else {
                include_once "../Templates/REview.php";
            }
        } else {
            include_once "../Templates/home.php";
        }
        break;
    case 'registeren':
       $titleSuffix='| Register';
       if(isset($_POST['register'])) {
           $result = makeRegistration();
           switch ($result) {
               case 'SUCCESS':
                   header("Location:/home");
                   break;
               case 'INCOMPLETE';
                   $message = "Niet alle velden correct ingevuld";
                   break;
               case 'EXIST';
                   $message = "Gebruiker bestaat al";
                   include_once "../Templates/registeren.php";
                   break;
           }
       }
           else{




            include_once "../Templates/registeren.php";
        }
        break;
    case 'contact':
        $contact = getContact();
        include_once "../Templates/contact.php";
        break;
    case 'admin':
        include_once ('admin.php');
        break;
    case 'logout':
        logout();
        include_once ('../Templates/home.php');
        break;
    case 'member':
        include_once ('member.php');
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
