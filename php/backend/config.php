<?php

$servername  =  "localhost";
$username = "root";
$pass = "";
$db = "saloon_db";

// creating connection to the database oop mysqli
$conn = new mysqli($hostname, $user, $pass, $db);
if ($conn->connect_error) {

    die("connection failed" . $conn->connect_error);
}

// closing the database connection
$conn->close();


// connecting to the database using procedural mysqli
$con = mysqli_connect($servername,$username,$db,$pass);
if(!$con){
    die("connection failed". mysqli_connect_error());
}else{
    echo" connection was successful";
}

// closing the database connection
mysqli_close($con);

// connecting to the database using PDO
try{
    $conn2 = new PDO("mysql:host=$servername;dbname=$saloon_db",$username,$pass);
//setting the exception error in pdo
$conn2 ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $sql2 . "<br>" . $e->getMessage();
}




?>
