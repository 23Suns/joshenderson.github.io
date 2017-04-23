<?php

require 'display_post.php';
require 'escape.php';

$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
$query = 'SELECT * FROM posts ORDER BY date DESC;';
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
		<meta charset="UTF-8">
	</head>
	<body>
	<?php include 'header.php'; ?>
	<?php
	while($post = mysqli_fetch_assoc($result)){
		$tagres = mysqli_query($conn, 'SELECT * FROM tags WHERE id='.escape($conn, $post[id]).';');
		display_post($post, $tagres);
	}
	?>
	</body>
</html>
