
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
	<form action ="select2.php" method ="POST">
		<select name ="course" id "course">
			<option value ="BCA">BCA</option>
			<option value ="PGDCA">PGDCA</option>
		</select>
		<select id ="semester">
		<option>1</option>
		<option>2</option>
		</select>
		<input type ="submit" value ="save">
	</form>
	
	<script>
		$("#course").change(function()
		{
			var course = document.getElementById('course').value;
			if(course == "PGDCA")
			{
				alert(" ");
				$("#semester").val("1");
				document.getElementById('semester').value="Adhoc";
			}
		});
	</script>