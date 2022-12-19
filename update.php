<?php
	
	$conn=mysqli_connect('localhost','root','','khatabook');
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$mob = $_POST['mob'];
	$ygive = $_POST['ygive'];
	$yget = $_POST['yget'];
	
	
	
	$q="update view set fname='$fname',mob='$mob',ygive='$ygive',yget='$yget' where  id=$id";
	
	$result=mysqli_query($conn,$q);
	
	if(mysqli_affected_rows($conn)>0){
		header('location:index.php');
	}else{
		echo "Fail to update data. Please try again";
		if(mysqli_errno($conn)==1062)
		{
				
		}
	}
?>