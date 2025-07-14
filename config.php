<?php
// config.php
$host = 'localhost';
$user = 'root';    
$password = "";
$database = 'login';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>


/*
http://localhost/login_register/index.php#
http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=login&table=users
*/