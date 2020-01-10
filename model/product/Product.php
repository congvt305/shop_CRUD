<?php


class Product
{
    private $product_code;
    private $product_name;
    private $product_type;
    private $product_price;
    private $product_quantity;
    private $date_added;
    private $product_desc;

    public function __construct($_product_name, $_product_type, $_product_price, $_product_quantity, $_product_desc)
    {
        $this->product_name = $_product_name;
        $this->product_type = $_product_type;
        $this->product_price = $_product_price;
        $this->product_quantity = $_product_quantity;
        $this->product_desc = $_product_desc;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->product_code;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->date_added;
    }

    /**
     * @return mixed
     */
    public function getProductDesc()
    {
        return $this->product_desc;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @return mixed
     */
    public function getProductQuantity()
    {
        return $this->product_quantity;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * @param mixed $product_code
     */
    public function setProductCode($product_code)
    {
        $this->product_code = $product_code;
    }

    /**
     * @param mixed $date_added
     */
    public function setDateAdded($date_added)
    {
        $this->date_added = $date_added;
    }
}