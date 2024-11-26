<?php
session_start();

//connection database 
$sname = "localhost";
$uname = "root";
$pwd = "";
$database = "project_paksena";
$conn = new mysqli( $sname, $uname, $pwd, $database);

if(!$conn){
    die ("connection failed: ". mysqli_connect_error());
}
?>
