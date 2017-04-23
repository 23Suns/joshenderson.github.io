<?php
	$loggedin = true;
?>

<!-- Nested between head and body -->
<header>
	<div id="titletext">ILK.KIC BLOG</div>
	<nav>
		<a href="./index.php">Home</a>
		<a href="https://github.com/Didact/">Portfolio</a>
		<a>Categories</a>
		<a>Contact</a>
		<?php if($loggedin) echo "<a href=\"newpost.php\">New Post</a>"; ?>
	</nav>
</header>
