<?php
class Database
{
    private $dsn = "mysql:host=localhost;dbname=internship";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->pass);
            echo "Successfully connected to the server!";
        } catch (PDOException $e) {
            echo "Successfully failed to the server!";
            die($e->getMessage());
        }
        return $this->conn;
    }
}
$ob = new Database();
