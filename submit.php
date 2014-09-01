<?php
if(!isset($_POST['title']) || $_POST['title'] == ''
|| !isset($_POST['author']) || $_POST['author'] == ''
|| !isset($_POST['text']) || $_POST['text'] == ''){
	echo 'Invalid form data, please go back and try again.';
	die();
}
$conn = mysqli_connect('localhost', 'root', 'root', 'blog');
$title = mysqli_real_escape_string($conn, $_POST['title']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$text = mysqli_real_escape_string($conn, $_POST['text']);
$res = mysqli_query($conn, "INSERT INTO posts VALUES (null, '$title', '$author', CURDATE(), '$text');");
if(!$res){
	echo "Error inserting into database";
	die();
}
header('Location: newpost.php', TRUE, '303');
die();
?>
