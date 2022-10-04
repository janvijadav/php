<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.min.css"/>
<?php
	$con = mysqli_connect("localhost","root","","janvi");
	if(!$con)
	{
		echo "Error DB!";
	}
	else
	{
		if(isset($_POST['txtnm']))
		{
			$nm = $_POST['txtnm'];
			$mail = $_POST['txtmail'];
			$mob = $_POST['txtmob'];
			$pass = $_POST['txtpass'];
			$sql = "INSERT INTO `usr`(`fullname`, `email`, `mobile`, `password`) VALUES ('$nm','$mail','$mob','$pass')";
			if(mysqli_query($con,$sql))
			{
				header("location:login.php");
			}
		}
	}
?>
<div class="container-fluid mt-2">
	<form action="register.php" method="POST">
		<input type="text" class="form-control" placeholder="Enter Name" name="txtnm" required></br>
		<input type="email" class="form-control" placeholder="Enter Mail Address" name="txtmail" required></br>
		<input type="text" class="form-control" placeholder="Enter Mobile Number" name="txtmob" required></br>
		<input type="password" class="form-control" placeholder="Enter Password" name="txtpass" required></br>
		<input type="submit" class="btn btn-primary w-100" value="Register">
	</form>
</div>