<?php 
/**
 * Home page
 *
 * @package Login with php
 * @author Kevia Developer ~ dev.kevia@gmail.com
 */

include_once($_SERVER['DOCUMENT_ROOT'].'/core/inc/config.php');

if (is_user_login() == false) {
	header("Location: /login.php");
	die();
}

$user_info = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `id` = '$_SESSION[login]'"));
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $user_info['name'].' '.$user_info['surname']; ?></title>
</head>
<body>

	<h2>Welcome!</h2>
	
	<p>ID: <strong>#<?php echo $user_info['id']; ?></strong></p>
	<p>Name: <strong><?php echo $user_info['name'].' '.$user_info['surname']; ?></strong></p>
	<p>Email: <strong><?php echo $user_info['email']; ?></strong></p>
	<p>Username: <strong><?php echo $user_info['username']; ?></strong></p>

	<a href="/logout.php"> Logout </a>
</body>
</html>