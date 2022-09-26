<?php
    $con = mysqli_connect("localhost","root","","janvi");
	if(isset($_POST['subbtn']))
	{
		$id=$_POST['txtid'];
		$nm=$_POST['txtnm'];
		$no=$_POST['txtno'];
		$sql="INSERT INTO `project_janvi`(`emp_id`,`employee_name`,`employee_no.`) VALUES ('$id','$nm','$no')";
		$res=mysqli_query($con,$sql);
	}
?>

<html>
	<body>
		<form action ="pro.php" method="post">
			<input type ="text" name ="txtid" placeholder ="enter id" required></br>
			<input type ="text" name="txtnm" placeholder ="enter name" required></br>
			<input type ="text" name="txtno" placeholder ="enter num" required>
			<input type ="submit" name="subbtn" class="btn btn-success" value ="save">
		</form>
	</body>
</html>
