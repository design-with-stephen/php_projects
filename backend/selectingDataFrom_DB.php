<!-- selecting data from mysql database -->

<?php 
$servername = "localhost";

$username="root";
$password ="";
$dbname = "db";

//using mysqli object oriented

$conn = new mysqli($servername, $username,$password, $dbname);

if($conn->connect_error){
    die("failed".$conn->connect_error);
}

$sql ="SELECT id, firstname, lastname FROM users";

$result =$conn->query($sql);
// check for rows
$checkRows = $result->num_rows > 0;

if($checkRows){
    // fetch each row data
    $row =$result->fetch_assoc();

    while($row){
        echo "id:".$row["id"];
        echo "firstname:".$row["firstname"];
        echo "lastname:".$row["lastname"];
    }
}else{
    echo " 0 results";
}
$conn->close();

//selecting using mysqli procedural

$conn2 =mysqli_connect($servername, $username, $password, $dbname);
if(!$conn2){
    die("".mysqli_connect_error());
}

$sql2 = "SELECT * FROM users";

$result2 =mysqli_query($conn2, $sql2);
$checkRows2 = mysqli_num_rows($result2);

if($checkRows2){
    $row =mysqli_fetch_assoc($result2);

    while($row2){
        echo "".$row2["id"];
        echo "".$row2["firstname"];
        echo "".$row["lastname"];
    }
}else{
    echo "0 results";
}


mysqli_close($conn2);




// using pdo

echo"<table style ='border:solid 1px black;'>";

echo"<tr>
<th>Id</th>
<th>firstname</th>
<th>lastname</th>
</tr>";


class TableRows extends RecursiveIteratorIterator{
    function __construct($it){
        parent::__construct($it,self::LEAVES_ONLY);
    }

    function current(){
        return "<td style='width:150px'>". parent::current() ."</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren(){
        echo "</tr>". "\n";
    }
}


try{
    $conn3 = new PDO("mysql:host=$servername;dbname=db", $username,$password);

    // setting exception mode

    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn3->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $K=>$v){
        echo "$v";
    }

}catch(PDOException $e){
    echo $e->getMessage();
}


$conn3 = null;
echo"</table>";

?>