<?php 
include("../database/config.php");
class categroy extends database{
    public $category_name;
    public $category_description;

    public function addCategory(){

        $this->category_name = htmlspecialchars($_POST["categoryName"]);
        $this->category_description = htmlspecialchars($_POST["description"]);


        // inserting into database
        if(isset($_POST["submit"])){

            $sql_query = $this->conn = "
        INSERT INTO category_table(category_name,category_desc) 
        VALUES(category_name,category_description)
        ";
        $this->conn->query($sql_query);
        
        }
    
    }
}


?>