<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'blogify';

$conn = new MySQLi($host, $user, $password, $db_name); // Create a new connection object


if($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}
else{
  
}