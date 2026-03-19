<?php

	$a=mysqli_connect("localhost","root","","table");
	
	
	$id= $_POST['id'];
	$name= $_POST['name'];
	$email= $_POST['email'];

	
	$sql="insert into deta(id,name,email) value('$id','$name','$email')";
	
	mysqli_query($a,$sql);
	echo 'connect';
?>