<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";


//connecting to the database using using mysqli procedural

$conn = mysqli_connect($servername, $username, $password, $data);
if (!$conn) {
    echo "connection failed" . mysqli_connect_error();
} else {
    echo " connection successful";
}

// inserting data into the users table
$sql = "INSERT INTO USERS(
firstname, 
lastname, 
email)VALUES(
'lomoro','stephen','lomorostephen@gmail.com
)";

$result = mysqli_query($conn,$sql);

// checking if record is inserted
if($result){
    $last_id =mysqli_insert_id($conn);
    echo"record inserted successfully". $last_id;
}else{
    echo "error".$sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);

//using mysqli object oriented
//connecting to the database
$conn2 =new mysqli($servername, $username, $password, $data);
if(!$conn2){
    echo "error occurred".$conn->connect_error;
}

$sql2 = "INSERT INTO USERS(
  firstname,
  lastname,
  email
)VALUES(
  'lomoro',
  'stephen',
  'ste@gmail.com'
)";


$result2= $conn2 ->query($sql2);
if($result2 ===TRUE){
  $last_id =$conn->insert_id;
  echo "new record inserted". $last_id;
}else{
    echo"error".$sql2. "<br>". $conn->error;
}
$conn->close();



// using PDO

try{
    $conn3 = new PDO("mysql:host=$servername;dbname=$saloon_db",$username,$pass);
    $conn3->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO USERS(firstname, lastname, email)VALUES('John', 'Doe', 'john@example.com')";
    $conn3->exec($sql);
    $last_id = $conn3->lastInsertId();
    echo"new record inserted". $last_id;

}catch(PDOException $e){
    echo $sql. "failed". $e->getMessage();
}
$conn3==null;

?>

