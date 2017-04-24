<?php
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylesheet.css">
	<title>Submit a new post</title>
</head>
<body>
<?php include 'header.php'; ?>
<form id="inputform" action="./submit.php" method="post">
	<div class="row">
	<label for="newpost-title">Title</label>
	<input id="newpost-title" class="form-control" type="text" name="title" maxlength="100" required>
	</div>

	<div class="row">
	<label for="newpost-author">Author</label>
	<input id="newpost-author" class="form-control" type="text" name="author" maxlength="40" required>
	</div>

	<div class="row">
	<label for="newpost-text">Text</label>
	<textarea id="newpost-text" class="form-control" cols="50" rows="20" name="text" required></textarea>
	</div>

	<div class="row">
	<label for="newpost-tags">Tags</label>
	<input id="newpost-tags" class="form-control" type="text" name="tags">
	</div>

	<input type="submit" value="Submit">
</form>
</body>
</html>
