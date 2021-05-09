<?php
	include("db.php");
	session_start();
	if (isSet($_POST['submit_in'])) {
		$username = mysqli_real_escape_string($db, $_POST['username_in']);
		$password = md5(mysqli_real_escape_string($db, $_POST['password_in']));
	}
	if (isSet($_POST['submit_up'])) {
		$username = mysqli_real_escape_string($db, $_POST['username_up']);
		$password = md5(mysqli_real_escape_string($db, $_POST['password_up']));
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$result = mysqli_query($db, "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')");
	}
	if (!empty($_REQUEST['username_up'])) {
		$username = mysqli_real_escape_string($db, $_REQUEST['username_up']);
		$result = mysqli_query($db, "SELECT uid FROM users WHERE username='$username'");
		if (mysqli_num_rows($result) == 1) echo 'false';
		else echo 'true';
	}
	$result = mysqli_query($db, "SELECT uid FROM users WHERE username = '$username' AND password = '$password'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if (mysqli_num_rows($result) == 1) {
		$_SESSION['login_user'] = $row['uid'];
		echo $row['uid'];
	}
?>

