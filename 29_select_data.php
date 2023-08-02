<?php

//Connecting to a Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbgokul";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
echo "Connecction was successful <br>";
}

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the numbers of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the Database<br>";

//Display the Rows returned by the SQL Query
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch in a better way using a while loop
    while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno'] . ". Hello" . $row['name'] . "Welcome to" . $row['dest'];
    echo "<br>";
    }
}


?>