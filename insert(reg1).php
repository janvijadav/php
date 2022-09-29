<?php
	$con = mysqli_connect("localhost","root","","janvi");
	$unm = $_REQUEST['unm'];
	$pwd = $_REQUEST['pwd'];
	
	$insert = "INSERT INTO `reg`(`unm`,`pwd`)VALUES('$unm','$pwd')";
	$result = mysqli_query($con,$insert);
	if($result == TRUE)
	{
		header("location:index(reg2).php");
	}
?>


