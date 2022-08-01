<?php

// On remote sql database
$hostname = "remotemysql.com";
$username = "iFzsNLpxHA";
$password = "IEBRA2zmnU";
$database = "iFzsNLpxHA";
//This is local database down here
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "leave_blog";

$con = mysqli_connect("$hostname","$username","$password","$database");

if(!$con){
  
  header("Location:../errors/dberror.php");
  die();
} 

 
?>

  