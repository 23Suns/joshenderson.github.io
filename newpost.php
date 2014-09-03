<?php
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="stylesheet.css">
	<head>
		<title>Submit a new post</title>
	</head>
	<header>
			<div id="sitetitle"> <div id="titletext">Test Site Title</div></div>
			<div id="navbar">
				<ul>
					<li><a>Home</a></li>
					<li><a>Portfolio</a></li>
					<li><a>Blog</a></li>
					<li><a>Categories</a></li>
					<li><a>Contact</a></li>
				</ul>
			</div>
		</header>
	<body>
		<form action="./submit.php" method="post">
		<div>
			Title
			<br>
			<input type="text" name="title" maxlength="100">
			<br>
		</div>
		<div>
			Author
			<br>
			<input type="text" name="author" maxlength="40">
			<br>
		</div>
		<div>
			Text
			<br>
			<textarea name="text" cols="50" rows="5"></textarea>
			<br>
		</div>
		<div>
			Tags:
			<input type="text" name="tags"><br>		
		</div>
		<input type="submit" value="Submit">
		</form>
	</body>
</html>
