<?php
    include_once("config.php");
    $id = $_GET["usermyuid"];
    $SQL = "delete from users where myuid = $id";
    // $id = $_GET["userid"];
    // $SQL = "delete from users where id = $id";
    $result = mysqli_query($connection, $SQL);
    header("Location: list.php"); 
?>