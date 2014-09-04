 <?php
include './display_post.php';
$id = $_GET["id"];
$conn = mysqli_connect("localhost", "root", "root", 'blog');

$postres = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id;");
$tagres = mysqli_query($conn, "SELECT tag FROM tags WHERE id=$id;");

$post = mysqli_fetch_assoc($postres);
//$title = $post["title"];
//$author = $post["author"];
//$date = $post["date"];
//$text = $post["text"];
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./stylesheet.css">
		<title>Viewing post #<?="$id"?></title>
	</head>
	<?php include 'header.php'; ?>
	<body>
		<?php display_post($post, $tagres); ?>
	</body>
</html>
