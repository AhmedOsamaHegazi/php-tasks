<?php
// problem 1
echo "Welcome to php <br><br>";

//=====================================================================================================

//problem 2
$x= 5;
$y= "welcome";
$z= True;
echo $x; // 5
echo $y; // Welcome 
echo $z; // 1 

//=====================================================================================================

echo "<br>";echo "<br>";
//problem 3
$x = 5;
$y = "Welcome ";
$z = true;
var_dump($x);
echo '<br>';
var_dump($y);
echo '<br>';
var_dump($z);

//=====================================================================================================

echo "<br>";echo "<br>";
//problem 4 Using "for"
for ($i=0; $i<=15; $i++) 
{
    echo $i . '<br>';
}

//second method using  "while" 
$i = 0;
while ($i <= 15) 
{
  echo $i;
  $i++;
}

//=====================================================================================================

echo "<br>";echo "<br>";
//problem 5
define ("school", "iti");
echo school; // iti

//=====================================================================================================

echo "<br>";echo "<br>";
//problem 6 with problem 3
echo gettype ($x); // int
echo gettype ($y); // string
echo gettype ($z); // bolean

//=====================================================================================================

echo "<br>";echo "<br>";
// problem 7
$x = 5;
$y = "Welcome ";
$z = true;
$j;
echo isset($x) ? "True <br>" : "false <br>";
echo isset($y) ? "True <br>" : "false <br>";
echo isset($z) ? "True <br>" : "false <br>";
echo isset($j) ? "True <br>" : "false <br>";

//=====================================================================================================

echo "<br>";echo "<br>";
// problem 8 
echo empty($x) ? "True <br>" : "false <br>";
echo empty($y) ? "True <br>" : "false <br>";
echo empty($z) ? "True <br>" : "false <br>";
echo empty($j) ? "True <br>" : "false <br>";

//=====================================================================================================

echo "<br>";echo "<br>";
// problem 9
$m = 10;
$n = 40;
$result = $m + $n;

if ($result > 50)
{
  echo "accepted";
} 
else 
{
  echo "not accepted";
}

//=====================================================================================================

echo "<br>";echo "<br>";
//problem 10 
$Asalary = 1000;
$Bsalary = 1200;
$Csalary = 1400;

echo "<table border='1'>";
echo "<tr>
        <td>salary of master A is</td>
        <td>$Asalary</td>
      </tr>";
echo "<tr>
        <td>salary of master B is</td>
        <td>$Bsalary</td>
      </tr>";
echo "<tr>
        <td>salary of master C is</td>
        <td>$Csalary</td>
      </tr>";
echo "</table>";

//=====================================================================================================

echo "<br>";echo "<br>";
//problem 11

function numToStg($num) 
{
  return (string)$num;
}
$res = var_dump(numToStg(999)); 
echo $res ;

// Done! 
?>

