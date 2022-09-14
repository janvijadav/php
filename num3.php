<--1 0 1 0 1 0 1 0...n--></br><hr>


<?php
	if (isset($_POST['txtno']))
	{ 
	    $no=$_POST['txtno'];
		$a=1;
		$b=2;
		for($i=1;$i<=$no;$i++)
		{ 
			if($i%2==0)
			{
				echo "0"."&nbsp";
			}
		    else
			{
				echo "1"."&nbsp";
			}
		}
	}
?>
<form action ="num3.php" method ="post">
	<input type ="text" name ="txtno">
	<input type ="submit" value ="save">
</form>
