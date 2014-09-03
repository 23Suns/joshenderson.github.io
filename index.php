<?php
include 'display_post.php';
$conn = mysqli_connect("localhost", "root", "root", 'blog');
$query = "SELECT * FROM posts";
$result = mysqli_query($conn, $query);

if(!$result){
	print "Could not make query";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ILK.KIC Blog</title>
		<link rel="stylesheet" href="stylesheet.css">
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
	<?php
	while($post = mysqli_fetch_assoc($result)){
		$tagres = mysqli_query($conn, "SELECT * FROM tags WHERE id=$post[id];");
		display_post($post, $tagres);
	}
	?>
	</body>
</html>
