<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'kk4_database';
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
