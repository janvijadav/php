<--1 2 2 4 8 32....n--></br><hr>

<?php
	if (isset($_POST['txtno']))
	{ 
	    $no=$_POST['txtno'];
		$a=1;
		$b=2;
		for($i=1;$i<=$no;$i++)
		{ 
			if($i<=2)
			{
				echo $i."&nbsp";
			}
		    else
			{
				$c=$a*$b;
				echo $c."&nbsp";
				$a=$b;
				$b=$c;
			}
		}
	}
?>
<form action ="num2.php" method ="post">
	<input type ="text" name ="txtno">
	<input type ="submit" value ="save">
</form>
