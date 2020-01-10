<?php

class ProductController
{
    private $productDB;

    public function __construct()
    {
        $this->productDB = new ProductDB();
    }

    public function index()
    {
        $products = $this->productDB->getList();
        include_once "view/product/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "view/product/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = new Product($_POST['product_name'],
                $_POST['product_type'],
                $_POST['product_price'],
                $_POST['product_quantity'],
                $_POST['product_desc']);
            $this->productDB->addProduct($product);
            header("Location: index.php");
        }
    }

    public function delete()
    {
        $product_code = $_GET['id'];
        $this->productDB->deleteProduct($product_code);
        header("location: index.php");
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $product_code = $_GET['id'];
            $product_code = $this->productDB->getProductByID($_GET['id']);
            include_once "view/product/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_code = $_GET['id'];
            $this->productDB->editProduct($product_code, $_POST['product_name'],
                                                            $_POST['product_type'],
                                                            $_POST['product_quantity'],
                                                            $_POST['product_price'],
                                                            $_POST['product_desc']);
            header("Location: index.php");
        }
    }

    public function search()
    {
        $keyword = $_GET['keyword'];
        $result = $this->productDB->getListByKeyword($keyword);
        header("Location: index.php");

    }


}