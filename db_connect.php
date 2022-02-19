<?php

$servername = "localhost";
$username = "hrishi";
$password = "Hrishi@156";
$db_name = "VESIT_PROJECTS";
//connect to database
$conn = mysqli_connect($servername,$username,$password,$db_name);
// check the connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
else{
    echo 'connection successful';
}


?>