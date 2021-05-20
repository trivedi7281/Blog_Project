<?php

$domain = "localhost/finalblog/"; //like this: codingnepalweb.com/
$host = "localhost";
$user = "root"; //Database username
$pass = ""; //Database password
$db = "gemsalcove"; //Database name

$conn = mysqli_connect($host , $user ,$pass ,$db);
if(!$conn){
    //if database is not connected 
    echo "Database connection failed!".mysqli_connect_error();
}

?>