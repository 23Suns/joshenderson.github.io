<?php
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="stylesheet.css">
	<head>
		<title>Submit a new post</title>
	</head>
	<header>
		<div id="navbar">
			<ul>
				<li><a>Home</a></li>
				<li><a>Portfolio</a></li>
				<li><span id="titletext">ILK.KIC BLOG</span></li>
				<li><a>Categories</a></li>
				<li><a>Contact</a></li>
			</ul>
		</div>
	</header>
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
				<textarea class="form-control" cols="50" rows="5"></textarea>
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