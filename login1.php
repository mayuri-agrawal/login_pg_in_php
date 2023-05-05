<!DOCTYPE html>
<html>
<head>
	<title>Form Page 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<h1>Page 1: Name, Phone Number & Email</h1>
	<form action="login2.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" name="name" required>
		<br>
		<label for="phone">Phone Number:</label>
		<input type="text" name="phone" required>
		<br>
		<label for="email">Email:</label>
		<input type="email" name="email" required>
		<br>
		<input type="submit" value="Next">
	</form>
</body>
</html>
