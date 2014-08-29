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

<html>
	<head>
		<link rel="stylesheet" href="http://joshenderson.github.io/stylesheet.css">
		<title>Viewing post #<?="$id"?></title>
	</head>
	<body>
		<wrap>
			<header>
				Lorem Ipsum
				<div>
				</div>
			</header>
		</wrap>
		<div id="topline">
			<h1 id="title" class="content"><?=$title?></h1>
			<h2 id="author" class="content"><?=$author?></h2>
		</div>
		<div id="bottomline">
			<p id="text" class="content">
				<?=$text?>
			</p>
			<p id="author"><?=$author?></p>
		</div>
		<div id="title" class="content">
			<?php
			print "| ";
			while($tag = mysql_fetch_assoc($tagres)){
				print $tag["tag"];
				print " | ";
			}
			print "\n";
			?>
		</div>
	</body>
</html>
