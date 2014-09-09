<?php
function display_post($post, $tagres, $full=false){
	$title = $post['title'];
	$author = $post['author'];
	$text = $post['text'];
	$date = $post['date'];
	$id = $post['id'];
	$tags = "| ";
	while($tag = mysqli_fetch_assoc($tagres)){
		$tags .= "<a href=\"./search.php?tag=$tag[tag]\">$tag[tag]</a> | ";
	}
	$titletext = ($full) ? $title : "<a href=\"view.php?id=$id\">$title</a>";
	$readmore = ($full) ? "" : "<a href=\"view.php?id=$id\">Read more</a>";
	$body = <<<HERE
	<div id="post">
		<div id="topline">
			<h1 id="title">$titletext</h1>
			<h2 id="author">$author</h2>
		</div>
		<div id="bottomline">
			<p id="text">
				$text
			</p>
		</div>
		<div id="tags">
			$tags
			<h1 id="date">$date</h1>
		</div>
	</div>

HERE;
	print $body;
}
?>
