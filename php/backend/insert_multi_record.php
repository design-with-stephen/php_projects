<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="";

// using mysqli object oriented
$conn = new mysqli($servername, $username,$password, $dbname);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}else{
    echo" connection successful";
}

$sql ="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lomoro','steve','12@gmail.com'
)";
$sql .="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lo','steve','1234@gmail.com'
)";

$sql .="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'loms','steve','124@gmail.com'
)";

$result_mult =$conn->multi_query($sql);

if($result_mult ===TRUE){
    echo"new records inserted successfully";
}else{
    echo "error:".$sql."<br>". $conn->error;
}
$conn->close();




//using procedural mysqli

$conn2 = mysqli_connect($servername, $username, $password, $dbname);
if(! $conn2){
    die("failed".mysqli_connect_error());
}else{
    echo"connection successful";
}


$sql ="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lomoro','steve','12@gmail.com'
)";
$sql .="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lo','steve','1234@gmail.com'
)";

$sql .="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'loms','steve','124@gmail.com'
)";

$result_multi2 =mysqli_multi_query($conn2, $sql);

if($result_multi2 ===TRUE){
    echo"record inserted successfully";
}else{
    echo "failed".$sql. "<br>". mysqli_error($conn2);
}

mysqli_close($conn2);




//using pdo

try{
    $conn3 = new PDO("mysql:host = $servername; dbname=$dbname",$username,$pass);

//set the pdo error mode to exception
$conn3->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// begin the transaction
$conn3->beginTransaction();
$conn3->exec(
    $sql ="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lomoro','steve','12@gmail.com'
)");

$conn3->exec(
    $sql ="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lomoro','steve','12@gmail.com'
)");
$conn3->exec(
    $sql ="INSERT INTO USERS(firstname, lastname,email)
VALUES(
'lomoro','steve','12@gmail.com'
)");

$conn3->commit();
echo"new record inserted";
}catch(PDOException $e){
    $conn3->rollBack();
 echo "".$e->getMessage();
}

$conn3 = null;
?>