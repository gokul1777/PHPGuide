<?php

//Connecting to a Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
echo "Connecction was successful <br>";
}

//Create a DB
$sql = "CREATE DATABASE dbGokul";
$result = mysqli_query($conn, $sql);

//Check for the database creation success

if($result){
    echo "The DB was created successfully <br>";
}
else{
    echo "The DB was not created suuccesfully because of this error ---->" . mysqli_error($conn);
}
echo "The reesult is";
echo var_dump($result);
echo "<br>";



?>