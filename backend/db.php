<?php

include("config.php");
// creating a database
$sql = "CREATE DATABASE saloon_db";
$sql_result = $conn->query($sql);

if ($sql_result === TRUE) {
    echo " database created successfully";
} else {
    echo "Error in creating database";

    $conn->error;
}

// closing the database connection
$conn->close();

?>
