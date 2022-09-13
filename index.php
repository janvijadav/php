<?php
    if(isset($_POST['txtnm']))
	{
	     $nm=$_POST['txtnm'];
		 $rno=$_POST['txtrno'];
		 $cno=$_POST['txtcno'];
		 echo $nm." ".$rno." ".$cno;
	}
?>

<form action="index.php"method="post">
     <input type ="text" name="txtnm" placeholder ="Enter Name"required></br>
	 <input type ="text" name="txtrno" placeholder ="Enter Roll No"required></br>
	 <input type ="text" name="txtcno" placeholder ="Enter Contact No"required></br>
	 <input type ="submit" value ="display">
</form>