<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "online_shop";
// Create connection
define("BASE_URL", "http://localhost/online_shop/");
define("WEBNAME", "Online Shop");
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>