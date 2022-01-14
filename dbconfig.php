<?php
//fonction pour se connecter à la base de données 

$DBhost = "localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "api";

$conn = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>