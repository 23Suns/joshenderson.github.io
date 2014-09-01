 <?php
$id = $_GET["id"];
$conn = mysql_connect("localhost", "root", "root");
mysql_select_db("blog");

$postres = mysql_query("SELECT * FROM posts WHERE id=$id;", $conn);
$tagres = mysql_query("SELECT tag FROM tags WHERE id=$id;", $conn);

$post = mysql_fetch_assoc($postres);
$title = $post["title"];
$author = $post["author"];
$date = $post["date"];
$text = $post["text"];
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
		<div id="topline">
			<h1 id="title"><?=$title?></h1>
			<h2 id="author"><?=$author?></h2>
		</div>
		<div id="bottomline">
			<p id="text">
				<?=$text?>
			</p>
		</div>
		<div id="title">
			<?php
			print "| ";
			while($tag = mysql_fetch_assoc($tagres)){
				print $tag["tag"];
				print " | ";
			}
			print "\n";
			?>
			<h1 id="date"></h1>
		</div>
	</body>
</html>
