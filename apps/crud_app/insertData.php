<?php
include("config.php");

// checking if the method is set to post and submit
if (isset($_POST["submit"])) {
    $noteTitle = $_POST['noteTitle'];
    $noteTitle = trim(htmlspecialchars(str_ireplace(' ', '', $noteTitle)));
    $note = $_POST['note'];
    $note = trim(htmlspecialchars($note));
    
    // insert data into table
    $sql = "INSERT INTO notes(noteTitle,notes)VALUES('$noteTitle','$note')";

    // execute query
    $result = $conn->query($sql);

    // check query is executed
    if ($result) {
        // echo "note added successfully";
        header("location:views/view_notes.php");
    } else {
        echo "something went wrong";
    }
}

$conn->close();

?>