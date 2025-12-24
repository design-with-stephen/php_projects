<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dv";

// connecting using mysqli_procedural
$connection = mysqli_connect($servername, $username, $password);

if (!$connection) {
    die("connection failed" . mysqli_connect_error());
}

$delete_sql = "DELETE FROM users Where id='3'";

// execute the query

$result = mysqli_query($connection, $delete_sql);

if ($result) {
    echo "Record deleted successfully";
} else {

    echo "error occurred" . mysqli_error($connection);
}
mysqli_close($connection);



// using mysqli object oriented

$conn2 = new mysqli($servername, $username, $password, $dbname);
$conn2_error = $conn2->connect_error;

if ($conn2_error) {
    die("" . $conn2_error);
}

$sql2 = "DELETE FROM users where id=3";

// executing the query
$result2 = $conn2->query($sql2);

if ($result2 === true) {
    echo "record deleted";
} else {
    echo "error while deleting the record" . $conn2_error;

}

$conn2->close();



// using pdo
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "dv";
// connecting to the database using PDO
try {
    $pdo_conn = new pdo("mysql:host=$servername2;dbname=$dbname2", $username, $password);
    $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //  query to delete
    $sql3 = "DELETE FROM users Where id=3";

    // executing the query
    $query_result = $pdo_conn->exec($sql3);
    if ($query_result) {
        echo "record deleted successfully";
    }
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}


?>