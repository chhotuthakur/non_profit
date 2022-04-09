<?php
$username ="root";
$password ="";
$host = "localhost";
$dbname = "websitedata";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!-- root h username and $password kuch nahi h -->
