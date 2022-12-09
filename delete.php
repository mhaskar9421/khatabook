<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khatabook";

// Create connection
$join = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (!$join) {
  die("Connection failed: ". mysqli_connect_error());
}else{
  
}
