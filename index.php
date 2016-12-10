<?php

require 'display_post.php';
require 'escape.php';

$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
$query = 'SELECT * FROM posts;';
$result = mysqli_query($conn, $query);

if(!$result){
	print 'Could not make query';
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ILK.KIC Blog</title>
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<?php include 'header.php'; ?>
	<body>
	<?php
	while($post = mysqli_fetch_assoc($result)){
		$tagres = mysqli_query($conn, 'SELECT * FROM tags WHERE id='.escape($conn, $post[id]).';');
		display_post($post, $tagres);
	}
	?>
	</body>
</html>
