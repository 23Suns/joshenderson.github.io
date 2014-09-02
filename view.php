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
		<?php display_post($post, $tagres); ?>
	</body>
</html>
