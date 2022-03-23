<?php
$servername = "localhost";
$username = "toor";
$password = "toor";
$database = "wadak";

$connection = mysqli_connect($servername,$username,$password,$database);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>
