<?php

include("config.php");

//creating a Table using oop mysqli
$usersTable_sql ="CREATE TABLE Users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL, lastName VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE, 
req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$userTable_sql_result = $conn->query($usersTable_sql);

if($userTable_sql_result ===TRUE){
    echo"Table created successfully";
}else{
    echo"Error creating Table";
    $conn->error;
}
// closing the database connection
$conn->close();


// creating a table using mysqli procedural
$usersTable_sql2 ="CREATE TABLE Users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL, lastName VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE, 
req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$userTable_sql2_result = mysqli_query($con, $usersTable_sql2);

if($userTable_sql2_result === TRUE){
    echo "Table created successfully";
}else{
    echo "Error creating table";
    mysqli_error($con);
}
// closing the database connection
mysqli_close($con);

// creating table using PDO

$usersTable_sql3 = " CREATE TABLE Users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL, lastName VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE, 
req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
";

// the exec() function is used because there is no connection established
try{
    $conn2->exec($usersTable_sql3);
} catch(PDOException $e){
    echo $usersTable_sql3."<br>" . $e->getMessage();
}
// closing the connection
$conn2 = null;


?>
