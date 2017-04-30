<?php
	$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
	$tagres = mysqli_query($conn, 'SELECT DISTINCT tag FROM tags ORDER BY tag ASC;');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./stylesheet.css">
<title>Categories</title>
</head>
<body>
<?php include 'header.php' ?>
<div id="categories-container">
<div id="categories">
	<ul>
		<?php
		while($tag = mysqli_fetch_assoc($tagres)) {
			echo "<li><a href=\"./search.php?tag=$tag[tag]\">$tag[tag]</a></li>";
		}
		?>
	</ul>
</div>
</div>
</body>
</html>
