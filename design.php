   
		<--wap to input following values from user and design table.[php]--><br>
	
	<?php
		if(isset($_POST['txtrow']))
		{
			$row = $_POST['txtrow'];
			$col = $_POST['txtcol'];
			$k=1;
			echo"<table border='1' width='100'>";
			for($i=1;$i<=$row;$i++)
			{
				echo"<tr>";													
				for($j=1;$j<=$col;$j++)
				{
					echo"<td>".$k;
					$k++;
				}
			}
				echo"</table>";
		}
	?>
	
	<form action ="design.php" method="POST">
		<input type ="text" name="txtrow" placeholder="enterrow"></br>
		<input type ="text" name="txtcol" placeholder="entercol"></br>
		<input type ="submit" value ="tabledesign">
	</form>