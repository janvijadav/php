<?php
$con = mysqli_connect("localhost","root","","janvi");
$id  = $_REQUEST['id'];
$delete = "DELETE FROM `reg` WHERE `id`='$id'";
$result = mysqli_query($con,$delete);
header("location:detail.php");
?>