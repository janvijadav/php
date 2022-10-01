
<?php
	$con = mysqli_connect("localhost","root","","cward");
	if(isset($_POST['subbtn']))
	{
		$nm=$_POST['txtnm'];
		$mail=$_POST['txtmail'];
		$fees=$_POST['txtfee'];
		$cou=$_POST['txtcourse'];
		$sem=$_POST['txtsemester'];
		$sql="INSERT INTO `cward`(`name`, `email`, `fees`, `cource`, `semester`) VALUES('$nm','$mail','$fees','$cou','$sem')";
		
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
			<form action ="cward.php" method ="POST">
			<input type ="text" name="txtnm" placeholder ="enter name" required></br>
			<input type ="text" name ="txtmail" placeholder ="enter email" required></br>
   		    <input type="text" name="txtfee"placeholder ="fees" required></br>
		    <input type="text" name="txtcourse"placeholder ="cou" required></br>
			<input type="text" name="txtsemester"placeholder ="sem" required></br>
			<input type ="submit" name="subbtn" class="btn btn-success" value ="Login">
			
		
		<select id ="month">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
		<input type ="submit" value ="save">
	</form>
	
	<script>
		$("#course").change(function()
		{
			var course = document.getElementById('course').value;
			if(course == "C LANGUAGE")
			{
				alert(" ");
				$("#month").val("1");
				document.getElementById('month').value="Adhoc";
			}
		});
	</script>
			
		</div>
	</body>
</html>











	
 