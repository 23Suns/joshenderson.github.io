<?php
include 'display_post.php';
$tag = $_GET['tag'];
$author = $_GET['author'];
$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
$tagres = mysqli_query($conn, "SELECT * FROM tags WHERE tag='$tag';");
$postres = mysqli_query($conn, 'SELECT * FROM posts;');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Searching for posts tagged "<?="$tag"?>"</title>
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<?php include 'header.php'; ?>
	<body>
	<?php
	while($tag = mysqli_fetch_assoc($tagres)){
		while($post = mysqli_fetch_assoc($postres)){
			if($post['id'] == $tag['id']){
				display_post($post, mysqli_query($conn, "SELECT * FROM tags WHERE id=$tag[id];"));
				break;
			}
		}
	}
	?>
	</body>
</html>
