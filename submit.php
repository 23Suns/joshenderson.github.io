<?php

function escape($conn, $string){
	return htmlspecialchars(mysqli_real_escape_string($conn, $string));
}

if(!isset($_POST['title']) || $_POST['title'] == ''
|| !isset($_POST['author']) || $_POST['author'] == ''
|| !isset($_POST['text']) || $_POST['text'] == ''){
	echo 'Invalid form data, please go back and try again.';
	die();
}
$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
$title = escape($conn, $_POST['title']);
$author = escape($conn, $_POST['author']);
$text = escape($conn, $_POST['text']);
$res = mysqli_query($conn, "INSERT INTO posts VALUES (null, '$title', '$author', CURDATE(), '$text');");
if(!$res){
	echo "Error inserting into database";
	die();
}
header('Location: newpost.php', TRUE, '303');
die();
?>
