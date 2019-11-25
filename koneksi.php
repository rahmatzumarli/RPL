<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "rpl";

$conn = new mysqli ($hostname,$username,$password,$db);

if($conn->connect_error){
    die("Failed to connect database".$conn->connect_error);
}else{
    // echo "Succesfully Connected to database!";
}
