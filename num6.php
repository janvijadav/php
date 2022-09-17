<--1Az 2By 3Cx 4Dw...--></br><hr>


<?php
	if (isset($_POST['txtno']))
	{ 
		$k=1;
		$a=65;
		$m=122; 
		$no=$_POST['txtno'];
		for($i=1;$i<=$no;$i++)
		{ 	
			for($j=1; $j<=$i; $j++)
			{
			echo $k.chr($a).chr($m)."&nbsp";
		    $k++;
			$a++;
			$m--;
	    	}
		echo "<br>";
		}
	}
?>
<form action ="num6.php" method ="post">
	<input type ="text" name ="txtno">
	<input type ="submit" value ="save">
</form>
