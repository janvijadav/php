
	<form action="" method="POST" enctype="multipart/form-data">
		<input type ="text" name ="txtroll" placeholder ="enterrollno."></br>
		<input type ="text" name ="txtnm" placeholder ="enter name"></br>
		<input type ="file" name ="janvi" id ="imgInp" accept =".png, .jpg, .jpeg"</br>
		<img scr="" id ="blah" alt ="select image" height ="150" width ="150"></br>
		<input type ="submit" value ="save">
	</form>

	  <?php
		if(isset($_POST['txtroll'])){
			$con=new mysqli("localhost","root","","janvi");
			if($con){
			$rnm=$_POST['txtroll'];
			$nm=$_POST['txtnm'];
			$target_div="janvi/";
			$name=rand(150,148000);
			$extension = pathinfo($_FILES["janvi"]["name"],PATHINFO_EXTENSION);
			$fnm=$name.$extension;
			move_uploaded_file($_FILES["janvi"]["tmp_name"],$target_div.$name.".".$extension);
			$sql="INSERT INTO `img`(`rollno`, `name`, `file`) VALUES ('$rnm','$nm','$fnm')";
			mysqli_query($con,$sql);
		}
	}
	?>
  <script>
	imgInp.onchange = evt =>
		{
			const [file] = imgInp.files
				if (file)
			{
				blah.src = URL.createObjectURL(file)
			}
		}
</script>




	 