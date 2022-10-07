<--cookies-->

	<?php
		$cname = "PGDCA";
		$cvalue = "SEM1";
		setcookie($cname,$cvalue,time()+(86400 * 1),"/");
	?>
	
	<?php
	     if(isset($_COOKIE['PGDCA']))
		 {
			echo $_COOKIE['PGDCA']; 
		 }
		else
		{
			echo "NOT SET!";
		}			
	?>