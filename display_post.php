<?php
function display_post($post, $tagres, $full=false){
	$title = $post['title'];
	$author = $post['author'];
	$encodedauthor = urlencode($author);
	$text = preg_replace('/'."\n".'/', '<br>', $post['text']);
	#$text = $post['text'];
	$date = $post['date'];
	$id = $post['id'];
	$tags = "| ";

	while($tag = mysqli_fetch_assoc($tagres)){
		$tags .= "<a href=\"./search.php?tag=$tag[tag]\">$tag[tag]</a> | ";
	}

	$titletext = ($full) ? $title : "<a href=\"view.php?id=$id\">$title</a>";

	$readmore = "";
	if(!$full && strpos($text, '<br>')) {
		$text = substr($text, 0, strpos($text, "<br>"));
		$readmore = "<br><br><a href=\"view.php?id=$id\">[Read more]</a>";
	}
	$body = <<<HERE
	<div class="post">
		<div class="topline">
			<h1 class="title">$titletext</h1>
			<h1 class="date">$date</h1>
		</div>
		<div class="bottomline">
			<p class="text">
				$text
				$readmore
			</p>
			<div class="tags">
				$tags
			</div>
			<h2 class="author"><a href="./searchauthor.php?author=$encodedauthor">$author</a></h2>
		</div>
	</div>

HERE;
	print $body;
}
?>
