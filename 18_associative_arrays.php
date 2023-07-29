<?php

echo "Welcome to associative arrays in PHP <br>";
//These are called indexed array
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

// Associative Arrays
$favcol = array(
    'Shubham' => 'Red',
    'Rohan' => 'Green',
    'Gokul' => 'Navyblue',
    8 => 'this'
);

foreach($favcol as $key => $value){
    echo "Favorite color of $key is $value <br>";
}
// echo $favcol ['Gokul'];
// echo "<br>";
// echo $favcol ['Rohan'];
// echo "<br>";
// echo $favcol [8];


?>