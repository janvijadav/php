<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.min.css"/>
<?php
	$con = mysqli_connect("localhost","root","","janvi");
	if(!$con)
	{
		echo "Error DB!";
	}
	else
	{
		if(isset($_POST['txtmail']))
		{
			$mail = $_POST['txtmail'];
			$pass = $_POST['txtpass'];
			$sql = "select * from `usr` where email='$mail' and password='$pass'";
			$res = mysqli_query($con,$sql);
			$count  = mysqli_affected_rows($con);
			if($count == 1)
			{
				session_start();
				$_SESSION['usr'] = $mail;
				header("location:home.php");
			}
			else
			{
				echo ("Invalid Username or Password!");
			}
		}
	}
?>
<div class="container mt-2">
<form action="login.php" method="POST">
	<input type="email" class="form-control" placeholder="Enter Mail Address" name="txtmail" required></br>
	<input type="password" class="form-control" placeholder="Enter Password" name="txtpass" required></br>
	<input type="submit" class="btn btn-primary w-100" value="Login">
</form>
</div>