<?php
	include("db.php");
	session_start();
	if (!empty($_REQUEST['username_up'])) {
		$username = mysqli_real_escape_string($db, $_REQUEST['username_up']);
		$result = mysqli_query($db, "SELECT uid FROM users WHERE username='$username'");
		$count = mysqli_num_rows($result);
		if ($count == 1) {
			echo 'false';
		} else {
			echo 'true';
		}
	}
?>