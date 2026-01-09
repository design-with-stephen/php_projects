<?php 


class database{
    private $servername = "localhost";
    private $dbname="drms_db";
    private $username="root";
    private $password = "";

    protected $conn;

    public function __construct(){
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );

        if($this->conn->connect_error){
            die("ooops".$this->conn->connect_error);
        }
    }
}


?>