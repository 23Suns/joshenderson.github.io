<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Submit a new post</title>
	</head>
	<body>
		<form action="./submit.php" method="post">
			Title:
			<input type="text" name="title" maxlength="100"><br>

			Author:
			<input type="text" name="author" maxlength="40"><br>

			Text:
			<textarea name="text" cols="50" rows="5"></textarea><br>

			Tags:
			<input type="text" name="tags"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
