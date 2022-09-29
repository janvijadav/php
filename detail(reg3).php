<?php
$con = mysqli_connect("localhost","root","","janvi");
$sql = "SELECT * FROM `reg`";
$result = mysqli_query($con,$sql);
while($data = mysqli_fetch_assoc($result))
{
	echo "<br>";
	echo $data['unm'];
	echo "<br>";
	echo $data['pwd'];
	echo "<br>";
	$id = $data['id'];
?>
<a href="delete.php?id=<?php echo $id; ?>">DELETE</a>
<?php
}
?>