<!DOCTYPE html>
<html>
<head>
	<title>Form Page 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<h1>Page 2: Location, Age and University</h1>
	<form action="welcome.php" method="POST">
		<label for="location">Location:</label>
		<input type="text" name="location" required>
		<br>
		<label for="age">Age:</label>
		<input type="number" name="age" required>
		<br>
		<label for="university">University:</label>
		<input type="text" name="university" required>
		<br>
		<?php
		// Fetch the name from Page 1
		if(isset($_POST['name'])){
			$name = $_POST['name'];
			echo '<input type="hidden" name="name" value="'.$name.'">';
		}
		?>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
