<?php

// Writing to a file in PHP
// echo "Welcome to write files in PHP";
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is the best file on this planet. Please don't argue with me on this one. \n");
// fwrite($fptr, "This is anothor content \n");
// fwrite($fptr, "This is anothor content3");

// fclose($fptr);

// Appending to a file in PHP
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr, "This is being appended to the file \n");
fclose($fptr);
?>