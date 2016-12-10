<?php
# tried to remove the $conn parameter since every file makes a mysql connection anyway
# was a bad idea. somehow $conn was falsey despite errno being 0
# this caused everything to be bad so it's still an explicit parameter
function escape($conn, $string){
	#if(!$conn) die('no connection found';
	return htmlspecialchars(mysqli_real_escape_string($conn, $string));
}
?>
