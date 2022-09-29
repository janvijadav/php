<?php
	$con = mysqli_connect("localhost","root","","janvi");
	if(isset($_POST['subbtn']))
	{
		$nm=$_POST['txtnm'];
		$mail=$_POST['txtmail'];
		$psw=$_POST['txtpsw'];
		$sql="INSERT INTO `login`(`name`, `email`, `password`) VALUES ('$nm','$mail','$psw')";
		
		$res=mysqli_query($con,$sql);
	}
?>

 <html>
	<head>
		<title>LOGIN PAGE</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<div class ="container mt-3">
		<form action ="online.php" method="post">
			<input type ="text" name ="txtmail" placeholder ="enter email`" required></br>
			<input type ="text" name="txtnm" placeholder ="enter name" required></br>
   		    <input type="text" name="txtpsw"placeholder ="password" required></br>
			<input type ="submit" name="subbtn" class="btn btn-success" value ="Login">
			 <a href="#!">Forgot password?</a>
		</div>
	</body>
</html>


 