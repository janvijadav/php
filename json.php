<?php
	$age=array("kartik"=>10,"janvi"=>15,"vinayak"=>20);
	echo json_encode($age);
	$enc='{"kartik":10,"janvi":15,"vinayak":20}';
	var_dump(json_decode($enc));
?>	