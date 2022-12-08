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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username = $_POST['username'];
  $password = $_POST['password'];
}

echo $username;
echo $password;

  $sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($join, $sql);
  $row = mysqli_num_rows($result);
  print_r($row);
  if($row > 0){
    echo 'User Login Success!!';
  }
  else{
    echo "User Login Failed!!". mysqli_error($join);
}

?>

