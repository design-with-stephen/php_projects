<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="cruddb";

$conn = new mysqli($servername,$username, $password, $dbname);
// check if connection has error
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>