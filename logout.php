<?php
	session_start();
	$_SESSION['usr']=' ';
	header("location:login.php");
?>