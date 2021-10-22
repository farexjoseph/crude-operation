<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="lady";



// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
echo mysqli_get_server_info($conn);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?> 