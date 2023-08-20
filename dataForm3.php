<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
     if ($password !== $confirmPassword) 
        { 
            echo "<h1>Passwords don't match.</h1>";      
        } 
        else 
        {
            $userName = $_POST["name"];
            echo "Name: $userName"."<br>";
        $email = $_POST["email"];
            echo "Email:$email"."<br>";
        $password = $_POST["password"];
        $room = $_POST["room"];
             echo "Room No. :$room"."<br>";
        $Ext = $_POST["ext"];
             echo "Ext :$Ext"."<br>";
       $_FILES["file"]; 
        // print_r($_FILES); 
        $fileName = $_FILES["file"]["name"]; 
        $filePath = $_FILES["file"]["tmp_name"];        
        $fileType = $_FILES["file"]["type"];
        $fileSize = $_FILES["file"]["size"];
            // echo $fileName."<br>".$fileType;
        $fileArray= explode(".", $fileName);
        $lastElement= end($fileArray);
        print_r($lastElement); echo "<br>";
        $extentions = ["png", "jpg", "gif", "svg"];
        if (in_array($lastElement, $extentions))
        {
            echo "uploaded ";
            $usersImage= "./usersImage/".time().$fileName;
            move_uploaded_file($filePath, $usersImage);
        } else
        {
            echo "please upload valid file";
        }
        }   
}
?>