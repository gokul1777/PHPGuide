<?php

// What is a Session?
// Used to manage information across different pages 

// Varify the user login info
session_start();
$_SESSION['username'] = "Gokul";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";



?>