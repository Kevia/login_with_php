<?php 
/**
 * Login page
 *
 * @package Login with php
 * @author Kevia Developer ~ dev.kevia@gmail.com
 */

include_once($_SERVER['DOCUMENT_ROOT'].'/core/inc/config.php');

if (is_user_login() == true) {
	header("Location: /index.php");
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Please login!</title>
	<link rel="stylesheet" type="text/css" href="/theme/css/login.css">
</head>
<body>
	
	<div id="login">

		<h1>Please login!</h1>

		<div class="login">
			<form action="/process.php?a=login" method="POST">
				<input type="text" name="user_login" placeholder="Email or Username.." required=""> 

				<br /> <br />

				<input type="password" name="user_pass" placeholder="Password..." required="">

				<br /> <br />

				<button class="login_btn">LOGIN</button>
			</form>
		</div>
	</div>

</body>
</html>