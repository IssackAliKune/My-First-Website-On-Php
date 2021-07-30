<?php
$host="localhost";
$user="root";
$password="";
$database="nairobi_dobi";

$connection=mysqli_connect($host, $user, $password, $database);

//Check if connection failed
if (!isset($connection)){
    die("Connection failed");
}

