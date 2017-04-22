<?php

require 'display_post.php';
require 'escape.php';

$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
$urlauthor = escape($conn, $_GET['author']);
$author = urldecode($urlauthor);
$postres = mysqli_query($conn, "SELECT * FROM posts WHERE author='$author';");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Searching for posts written by "<?="$author"?>"</title>
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<?php require 'header.php'; ?>
	<body>
		<?php
		while($post = mysqli_fetch_assoc($postres)){
			$tagres = mysqli_query($conn, "SELECT * FROM tags WHERE id=$post[id];");
			display_post($post, $tagres);
		}
		?>
	</body>
</html>
