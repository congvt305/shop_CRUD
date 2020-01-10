<?php

include "model/database/DBConnect.php";
include "model/product/Product.php";
include "model/product/ProductDB.php";
include_once "controller/ProductController.php";
include "view/core/navbar.php";

$productController = new ProductController();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product manager</title>
</head>
<body>
<?php
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case 'search':
            $productController->search();
            break;
        case 'add':
            $productController->add();
            break;
        case 'edit':
            $productController->edit();
            break;
        case 'delete':
            $productController->delete();
            break;
        default:
            $productController->index();
            break;
    }
?>
</body>
</html>

