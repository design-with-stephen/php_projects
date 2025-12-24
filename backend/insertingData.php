<?php 
include("config.php");
//inserting data into mysql database using mysqli and pdo

// using mysqli object oriented

$sql1 ="INSERT INTO Users(
   firstname, lastname,email
) VALUES('LOMORO','STEPHEN','lomorostephen@gmail.com')";

$result1 = $conn->query($sql1);

if($result1 === TRUE){
    echo "New Record recorded successfully";
    
}else{
    echo "Error:" . $sql1 ."<br>". $conn->error;
}
$conn->close();

// using mysqli procedural
$sql2 ="INSERT INTO Users(
   firstname, lastname,email
) VALUES('LOMORO','STEPHEN','lomorostephen@gmail.com')";

$result2 = mysqli_query($con,$$sql2);
if($result2){
    echo "New Record recorded successfully";
}else{
    echo "Error:" . $sql2 ."<br>". mysqli_error($con);
}
mysqli_close( $con );

// using pdo

try{
$conn3 = new PDO("myqsl:host=$servername;dbname=$saloon_db",$username,$pass);
//setting the exception error in pdo
$conn3 ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql3 ="INSERT INTO Users(
   firstname, lastname,email
) VALUES('LOMORO','STEPHEN','lomorostephen@gmail.com')";

$conn3->exec($sql3);

}catch(PDOException $e){
    echo $sql3."<br>".$e->getMessage();
}
$conn2 = null;

?>