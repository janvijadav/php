<--1 2 4 16 256....n--></br><hr>


<?php
	if (isset($_POST['txtno']))
	{ 
		$a=2;
	    $no=$_POST['txtno'];
		for($i=1;$i<=$no;$i++)
		{ 
			if($i<=2)
			{
				echo $i."&nbsp";
			}
		    else
			{
				$b=$a*$a;
				echo $b."&nbsp";
				$a=$b;
			}
		}
	}
?>
<form action ="num4.php" method ="post">
	<input type ="text" name ="txtno">
	<input type ="submit" value ="save">
</form>
