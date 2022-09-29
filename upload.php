
	<form action="" method="POST" enctype="multipart/form-data">
		<input type ="text" name ="txtroll" placeholder ="enterrollno."></br>
		<input type ="text" name ="txtnm" placeholder ="enter name"></br>
		<input type ="file" name ="" accept =".png, .jpg, .jpeg"</br>
		<img scr="" alt ="select image" height ="150" width ="150"></br>
		<input type ="submit" value ="save">
	</form>

	<?php
		if(isset($_POST['txtroll']))
		{
			$con = mysqli_connect("localhost","root",""," ");
			if($con)
			{
				$roll = $_POST['txtroll'];
				$nm = $_POST['txtnm'];
				$target_dir ="/";
				$name = rand(150-460000);
				$extension = pathinfo($_FILES["upload1"]["name"],PATHINFO_EXTENSION);
				$fnm = $name.$extension;
				move_uploaded_file($_FILES[""][tmp_name],$target_dir.$name.".".$extension);
				$sql = 
				mysqli_query()
				
			}
		}
	?>
	

</html>
	 