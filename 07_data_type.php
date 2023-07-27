<?php
$name = "Gokul";
$income = 200;

/*PHP Data Types
1- String
2- Integer
3- Float
4- Boolean
5- Object
6- Array
7- Null
*/

// String - Sequence of characters
$name = "Gokul";
$friend = 'Rohan';
echo "$name ka friend is $friend";
echo "<br>";

// Inreger - Non Dcimal Number
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;

//Float - Decimal point Number
$income = 344.5;
$debts = -45.5;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//Boolean - can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);


 // Object - Instances of classes 
// Employeee is a class ---> Gokul can be one object 

// Array - Used to store multiple values in a single variable
echo "<br>";
$friends = array("rohan", "Shubham", "Skillf", "Larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

//Null
$name = null;
echo var_dump($name);

?>