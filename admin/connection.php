<?php 
 $serve = "localhost";
 $user = "root";
 $pass = "";
 $db_name = "project1";

 $conn = mysqli_connect($serve,$user,$pass,$db_name);
 if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "connection successfully";
 
?>