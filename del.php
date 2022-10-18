<?php
	$con = mysqli_connect("localhost","root","","janvi");
	$id=$_REQUEST['id'];
	$sql=" DELETE FROM `img` WHERE `id`='$id'";
	$res=mysqli_query($con ,$sql);
	header("location:upload.php");
	
?>