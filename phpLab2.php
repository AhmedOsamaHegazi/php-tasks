<?php
//problem 1 
$arr = Array('a' => "PHP", 'b'=> "Open", 'c'=> "source", 'd'=> "ITI", 'e'=> "Day2", 'f'=> "Array");
$arr2 = Array("PHP", "Open", "source", "ITI", "Day2", "Array");
print_r($arr);
echo "<br>";
print_r($arr2);

//******************************************************************************************
echo "<br>";echo "<br>";
//problem 2 
//******************************************************************************************
echo "*********1st method!*********"; 
echo "<br>";

foreach ($arr as $key => $value) 
{
    echo "$key: $value"."<br>";
}

echo "<br>";
echo "*********2nd method!*********"; 
echo "<br>";

$count = count($arr);
for ($i = $count-1; $i < $count; $i++) // maybe wrong
{
    print_r ($arr)."<br>";
}

//******************************************************************************************
echo "<br>";echo "<br>";
//problem 3 create assArray
//problem 4 print assArray
//******************************************************************************************

$infoArr= array('Name' => 'yourName', 'Age' => 28,'Email' => 'yourEmail@yahoo.com', 'collage' => 'yourCollege'); 
print_r($infoArr);

//******************************************************************************************
echo "<br>";echo "<br>";
//problem 5
//******************************************************************************************

// print_r($infoArr);echo "<br>";
// sort($infoArr);

asort($infoArr);
print_r($infoArr);echo "<br>";

ksort($infoArr);
print_r($infoArr);echo "<br>";     

// rsort($infoArr);
// print_r($infoArr);echo "<br>";

// arsort($infoArr);
// print_r($infoArr);echo "<br>";

// krsort($infoArr);
// print_r($infoArr);echo "<br>";

//******************************************************************************************
echo "<br>";echo "<br>";
//problem 6
// using array_key
//******************************************************************************************
$infoArr= array('Name' => 'yourName', 'Age' => 28,'Email' => 'yourEmail@yahoo.com', 'collage' => 'yourCollege'); 
$keys = array_keys($infoArr); // hatReturn el array-keys fe keys 
print_r($keys);






    





?>