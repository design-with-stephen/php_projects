<?php
// connecting to the database
class database{
    private $servername="localhost";
    private $username= "root";
    private $password ="";
    private $dbname= "crudDB";

    protected $conn;
    public function __construct(){
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->conn->connect_error) {
            die("failed". $this->conn->connect_error);
        }
    }
}


?>