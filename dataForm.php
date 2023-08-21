<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $skill = $_POST["skill"]; 
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $department = $_POST["department"];
    $verifiCode = $_POST["verifiCode"];

    
    if ($gender == "male") 
    {
        echo "<h2>Thanks Mr. $firstName $lastName</h2><br>";
    } 
    else 
    {
        echo "<h2>Thanks Miss. $firstName $lastName</h2><br>";
    }
    
    
    echo "please review your information"."<br>";echo "<br>";
    echo "Name: $firstName $lastName"."<br>";
    echo "Address: $address<br>";
    $skills = implode(", ", $skill);
    echo "Skills: "; print_r($skills);
    echo "<br>";  echo "Country: $country<br>";
    echo "Department: $department<br>";
    
}


?>