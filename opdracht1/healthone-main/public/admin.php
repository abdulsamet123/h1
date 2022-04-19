<?php
global $params;
if (!isAdmin()){
    logout();
    header("location:/home");
}else{
    switch ($params[2]) {
        case 'home':
            include_once "../Templates/admin/home.php";
            break;
        case 'beheer':
            $products = getAllProducts();
            include_once "../Templates/admin/products.php";
            break;


        case'add':
            if (isset($_POST)){
                if (fileupload()){
                    saveProduct($_POST['name'], $_POST['category'], $_POST['description'], $message);
                    header("Location:/admin/products");
                }else{
                    $categories =getCategories();
                    include_once "../Templates/admin/addproduct.php";
               }
           }
       case'delete':
           $product=getProduct($_GET['id']);
           deleteProduct($_GET['id']);
           $products=getAllProducts();
           include_once "../Templates/admin/products.php";
           break;
        default:
           include_once "../Templates/admin/home.php";

    }
}
