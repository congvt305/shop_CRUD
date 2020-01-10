<?php


class ProductDB
{
    private $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getList()
    {
        $sql = "SELECT * FROM products";
        $statement = $this->conn->query($sql);
        $result = $statement->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['product_name'],
                $item['product_type'],
                $item['product_price'],
                $item['product_quantity'],
                $item['product_desc']);
            $product->setProductCode($item['product_code']);
            $product->setDateAdded($item['date_added']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function addProduct(Product $product)
    {
        $sql = "INSERT INTO products(product_name, 
                                     product_type, 
                                     product_price, 
                                     product_quantity,
                                     date_added,
                                     product_desc) 
                VALUES (:product_name, 
                        :product_type, 
                        :product_price, 
                        :product_quantity,                      
                        :date_added,                        
                        :product_desc)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam('product_name', $product->getProductName());
        $statement->bindParam('product_type', $product->getProductType());
        $statement->bindParam('product_price', $product->getProductPrice());
        $statement->bindParam('product_quantity', $product->getProductQuantity());
        $statement->bindParam('date_added', $product->setDateAdded(date('Y-m-d')));
        $statement->bindParam('product_desc', $product->getProductDesc());
        $statement->execute();
    }

    public function deleteProduct($product_code)
    {

        $sql = "DELETE FROM products WHERE product_code = $product_code";
        $statement = $this->conn->query($sql);
        $statement->execute();
    }

    public function editProduct($product_code, $product_name, $product_type, $product_price, $product_quantity, $product_desc)
    {
        $sql = "UPDATE products SET product_name = :product_name, product_type = :product_type, product_price = :product_price, product_quantity = :product_quantity, product_desc = :product_desc WHERE id = $product_code";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam('product_name', $product_name);
        $statement->bindParam('product_type', $product_type);
        $statement->bindParam('product_price', $product_price);
        $statement->bindParam('product_quantity', $product_quantity);
        $statement->bindParam('product_desc', $product_desc);
        $statement->execute();
    }

    public function getProductByID($id)
    {
        $sql = "SELECT * FROM products WHERE product_code = $id";
        $statement = $this->conn->query($sql);
        return $statement->fetch();
    }

    public function getListByKeyword($keyword)
    {
        $sql = "SELECT * FROM products WHERE product_name = $keyword OR product_desc = $keyword";
        $statement = $this->conn->query($sql);
        $result = $statement->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['product_name'],
                $item['product_type'],
                $item['product_price'],
                $item['product_quantity'],
                $item['product_desc']);
            $product->setProductCode($item['product_code']);
            $product->setDateAdded($item['date_added']);
            array_push($arr, $product);
        }
        return $arr;
    }


}