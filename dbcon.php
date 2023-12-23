<?php

$host = "localhost";
$user = "root";
$pw = "";
$db = "cinephile";

$conn = mysqli_connect($host, $user, $pw, $db);

if(!$conn){
    die("Not Connected !!!");
}

// echo "Successfully Connected ";

?>