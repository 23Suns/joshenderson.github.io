<?php
$conn = mysql_connect("localhost", "root", "root");
mysql_select_db("blog");
$query = "SELECT * FROM posts";
$result = mysql_query($query, $conn);

if(!$result){
	print "Could not make query";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Blog</title>
	</head>
	<body>
		<table>
			<tr>
				<?php
				while($row = mysql_fetch_field($result)){ ?>
					<td><?="$row->name"?></td>
				<?php } ?>
			</tr>
			<?php
			while($row = mysql_fetch_assoc($result)){ ?>
				<tr>
				<?php
				foreach($row as $key => $value){ ?>
					<td><?="$value"?></td>
				<?php } ?>
				</tr>
			<?php }?>
		</table>
	</body>
</html>
