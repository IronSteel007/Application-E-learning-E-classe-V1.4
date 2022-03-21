<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  // create new instance from a obj or class 
  $conn = new PDO("mysql:host=$servername;dbname=e_class_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
