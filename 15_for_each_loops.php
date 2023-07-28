<?php
echo "Welcome to the world of for each loops <br>";
$arr = array("Banana", "Apples", "Harpic", "Bread","Butter");
// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

//Better way to do this - foreach loop
foreach ($arr as $value) {
    echo "$value <br>";
}

?>