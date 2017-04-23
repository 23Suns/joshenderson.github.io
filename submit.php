<?php

require 'escape.php';

if(!isset($_POST['title']) || $_POST['title'] == ''
|| !isset($_POST['author']) || $_POST['author'] == ''
|| !isset($_POST['text']) || $_POST['text'] == ''){
	print 'Invalid form data, please go back and try again.';
	die();
}
if(!isset($tags) || $tags == ''){
	$tags = 'uncatagorized';
}
$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
if(!$conn) {
	print mysqli_connect_errno();
	die();
}
$title = escape($conn, $_POST['title']);
$author = escape($conn, $_POST['author']);
$text = escape($conn, $_POST['text']);
$tags = escape($conn, $_POST['tags']);
$res = mysqli_query($conn, "INSERT INTO posts VALUES (null, '$title', '$author', NOW(), '$text');");
if(!$res){
	echo 'Error inserting post into database';
	die();
}
$tagarr = explode(' ', $tags);
$countresource = mysqli_query($conn, 'SELECT COUNT(*) FROM posts;');
$countresult = mysqli_fetch_assoc($countresource);
$count = $countresult['COUNT(*)'];
foreach($tagarr as $tag){
	mysqli_query($conn, "INSERT INTO tags VALUES ($count, '$tag');");
}
header("Location: ./view.php?id=$count", TRUE, '303');
die();
?>
