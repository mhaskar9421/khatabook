<?php
	
	$conn=mysqli_connect('localhost','root','','khatabook');
	/*if($conn)
	{
		echo 'connected';
	}else{
		echo 'not connected';
	}
	*/
	$fname=$_POST['fname'];
	$mob=$_POST['mob'];
	$ygive=$_POST['ygive'];
	$yget=md5($_POST['yget']);
	$q="insert into view (NULL,'$fname','$mob','$ygive','','$yget')";
	$result=mysqli_query($conn,$q);
	if($result){
		echo "Data inserted successful";
	}else{
		echo "Fail to insert data. Please try again";
		echo mysqli_error($conn);
	}
?>