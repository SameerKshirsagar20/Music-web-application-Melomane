<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //echo "Connection Successful";
}
else{
    alert("Connection Failed").mysqli_connect_error();
}

?>