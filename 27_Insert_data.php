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

// Variables to be inserted into the table
$name = "Vikrant";
$destination ="Russia";

//SQL Query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

//Add a new trip to the Trip table in the database

if($result){
    echo "The record has been inserrted successfully <br>";
}
else{
    echo "The record was not inserted suuccesfully because of this error ---->" . mysqli_error($conn);
}



?>