<?php
function display_post($post, $tagres, $full=false){
	$title = $post['title'];
	$author = $post['author'];
	$encodedauthor = urlencode($author);
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
	<div class="post">
		<div class="topline">
			<h1 class="title">$titletext</h1>
			<h2 class="author"><a href="./searchauthor.php?author=$encodedauthor">$author</a></h2>
		</div>
		<div class="bottomline">
			<p class="text">
				$text
			</p>
			<div class="tags">
				$tags
			</div>
			<h1 class="date">$date</h1>
		</div>
	</div>

HERE;
	print $body;
}
?>
