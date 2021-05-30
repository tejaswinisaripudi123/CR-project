<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
echo "hi";
}

echo "hellooo";

mysqli_close($conn);
?>
