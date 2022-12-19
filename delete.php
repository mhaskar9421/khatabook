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


$sql="DELETE FROM  view WHERE id = ?";
//$result=mysqli_query($join,$sql);

if(mysqli_query($join,$sql)){
	 	echo "Record Delete Succsessfully..!"; //"<script Confirm('record deleted');
	//   window.location: 'index.php';
//   </script>";
 }	
else{
	
	 echo "no"; //"<Script>
		// 	alert('record not deleted');
		// 	window.location='index.php';
		// </script>";
	
	}
	
	
?>