<?php
class database{
    private $servername="localhost";
    private $username= "root";
    private $password= "";
    private $dbname= "drms_db";
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );
        if($this->conn->connect_error){
            die("". $this->conn->connect_error);
        }else{
            echo"connected successfully";
        }
    }
    
}


?>