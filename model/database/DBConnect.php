<?php


class DBConnect
{
    private $dns;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dns = "mysql:host=localhost; dbname=electric_shop; charset=utf8";
        $this->username = "baoquan";
        $this->password = "zZ0611@@@";
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dns, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
        return $conn;
    }


}
