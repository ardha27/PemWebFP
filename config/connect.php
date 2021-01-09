<?php
$servername = "127.0.0.1:3306";
$username = "u652632623_ardha_db";
$password = "Tekfo-eclair02";
$database = "u652632623_ardha_db";
// Create connection
define("BASE_URL", "");
define("WEBNAME", "Online Shop");
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>