<?php

$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'unique';

$conn = mysqli_connect($localhost,$username,$password,$database);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

?>