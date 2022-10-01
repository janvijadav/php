<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type ="text" name ="txtroll" placeholder ="enterrollno."></br>
		<input type ="text" name ="txtnm" placeholder ="enter name"></br>
		<input type ="file" name ="janvi" id ="imgInp" accept =".png, .jpg, .jpeg"</br>
		<img scr="" id ="blah" alt ="select image" height ="150" width ="150"></br>
		<input type ="submit" value ="save">
	</form>

	
	<?php
	     $con=new mysqli("localhost","root","","janvi");
		 if(isset($_POST['txtroll']))
	     {
			
			if($con)
		   {
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
	
	<?php
		if(isset($_POST['']))
	?>
	
	<table cellpadding="0" cellspacing="0" border="1px solid" width="100%">
	<tr>
        <th colspan="2">sr.</th>
		<th colspan="2">rollno.</th>
		<th colspan="2">name.</th>
		<th colspan="2">image.</th>
		<th colspan="2">action.</th>
	</tr>
	<?php
      
         $sql="SELECT * FROM `img` ";
		 $res=mysqli_query($con,$sql);
		 $i=1;
	     while($row = mysqli_fetch_assoc($res))
		 {
     ?>		    		  
	               <tr>     
                    <td><?php echo $i=1;?>
					<td><?php echo $row['rollno'];?>
					<td><?php echo $row['name'];?>
					<td><img height="50" width="50" src="<?php echo "janvi/". $row ['file'];?>">
					<td><a class="btn btn-danger" href="del.php?id=<?php echo $row['id'];?>">Delete</a>
		 <?php
		
		          $i++;
				}
         ?>		
  
	</table>
				  
				  
 
