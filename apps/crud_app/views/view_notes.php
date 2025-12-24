<?php
include("../config.php");

// querying data from the table
$sql = "SELECT * FROM notes";

// executing the query
$result = $conn->query($sql);

//checking for data (the rows)
$checkRows = $result->num_rows > 0;

if ($checkRows === TRUE) {
    // fetch each row
    $i = 0;
    echo"<table>";
    echo"<th>
    <tr>No</tr>
    <tr>Title</tr>
    <tr>Notes</tr>
    </th>";
    while($row = $result->fetch_assoc()){

        echo"
        <tr>
        <td>$i;</td>
        <td>$row[noteTitle];</td>
        <td>$row[notes];</td>
        </tr>
        ";
        // echo"id:".$i."<br>";
        // echo"Title:".$row["noteTitle"]."<br>";
        // echo"notes:".$row["notes"]."<br>";

        // increment the counter
        $i++;
    }
    "</table>";
} else {
    echo "0 data";
}

?>