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

$sql = "DELETE FROM `phptrip` WHERE `dest` ='Russia' LIMIT 7";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Deleted Successfully";

}else{
    $err = mysqli_error($conn);
echo "Not deleted successfully due to this error ---> $err";
}



?>