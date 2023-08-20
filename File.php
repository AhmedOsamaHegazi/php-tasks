<?php
$file = fopen("userInfoFile.txt", "a");

fwrite($file, "Name: ahmed osama
Email:ahmed@yahoo.com
Room No. :cloud
Ext :147
png
uploaded");

fclose($file)


$file = fopen("userInfoFile.txt", "r"); 
echo fread($file, filesize("userInfoFile.txt"));

fclose($file);

//file_get_content and file_put_content 

$data="Name: ahmed osama
       Email:ahmed@yahoo.com
       Room No. :cloud
       Ext :147
       png
       uploaded";
file_put_contents('userInfoFile.txt', $data); // hna hy7sl overWrite lw m4 3awzo y7sl = FILE_APPEND
 
$data = file_get_contents('userInfoFile.txt');


?>