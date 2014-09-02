<?php
$conn = mysqli_connect("localhost", "root", "root", 'blog');
$query = "SELECT * FROM posts";
$result = mysqli_query($conn, $query);

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
				while($row = mysqli_fetch_field($result)){ ?>
					<td><?="$row->name"?></td>
				<?php } ?>
			</tr>
			<?php
			while($row = mysqli_fetch_assoc($result)){ ?>
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
