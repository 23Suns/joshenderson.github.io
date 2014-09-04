<?php
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="stylesheet.css">
	<head>
		<title>Submit a new post</title>
	</head>
	<?php include 'header.php'; ?>
	<body>
		<div id="inputform">
		<form action="./submit.php" method="post">
		<div class="input">
		Title
			<br>
			<input class="form-control" type="text" name="title" maxlength="100">
			<br>
		</div>
		<div class="input">	
		Author
			<br>
			<input class="form-control" class="form-control" type="text" name="author" maxlength="40">
			<br>
		</div>
		<div class="input">
		Text
			<br>
				<textarea class="form-control" cols="50" rows="5" name="text"></textarea>
			<br>
		</div>
		<div class="input">
		Tags
			<br>
			<input class="form-control" type="text" name="tags">
			<br>
		</div>
		<input type="submit" value="Submit">
		</div>
		</form>
	</body>
</html>
