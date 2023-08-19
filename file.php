<?php
// $file = fopen("userData.txt", "a");

// fwrite($file, "Thanks Mr. ahmed osama
// please review your information
// Name: ahmed osama
// Address: masr el adema
// your Skills: skill
// Country: cairo
// Department: surgical");

// fclose($file)


$file = fopen("userData.txt", "r"); // ask eng mariam >> hwa ana lazm a read mn file txt wla 3ady ay extention bytl3 info zy eny a read info tal3a le browser

echo fread($file, filesize("userData.txt"));

fclose($file);
?>