<!-- prepared statements in php-->

<?php
$servername ="localhost";
$username ="root";
$pass ="";
$dbname ="mydb";

// creating connection using mysli

$conn = new mysqli(
    $servername, $username, $pass, $dbname
);

//checking connection
if($conn->connect_error){
    die("". $conn->connect_error);
}else{
    $stmt = $conn->prepare(
    " INSERT INTO USERS(firstname, lastname, email)VALUES(?,?,?)");

    $stmt->bind_param("sss",$firstname,$lastname,$email);

    // set the parameters
    $firstname = "steve";
    $lastname = "loms";
    $email ="loms@gmail.com";


    $recorded = $stmt->execute();

    if($recorded){
        echo"inserted successfully";
    }else{
        echo"failed";
    }

    $stmt->close();
    $conn->close();

    
}


// prepared statements using PDO

try{
    $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);

// set the PDO error mode to exception
$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// preparing the sql and binding the parameters

$stmt->prepare(
    "INSERT INTO USERS(firstname, lastname, email)VALUES(:firstname,:lastname,:email)"
);

$stmt->bind_param(':firstname' , $firstname);

$stmt->bind_param(':lastname' , $lastname);
$stmt->bind_param(':email' , $email);

// insert row
$firstname = "steve";
$lastname = "loms";
$email ="loms@gmail.com";

$stmt->execute();

echo"add successfully";
}catch(PDOException $e){
    echo "failed". $e->getMessage();
}

$conn =null;

?>