<?php 
/**
 * Process page
 *
 * @package Login with php
 * @author Kevia Developer ~ dev.kevia@gmail.com
 */

include_once($_SERVER['DOCUMENT_ROOT'].'/core/inc/config.php');

//login
if (isset($_GET['a']) && $_GET['a'] == "login") {
	$UserLogin 		= $_POST['user_login'];
	$User_Pass 		= $_POST['user_pass'];

	if (empty($UserLogin) || $UserLogin == "") {
		//prazno polje : email/username
		header("Location: /login.php");
		die();
	} else if (empty($User_Pass) || $User_Pass == "") {
		//prazno polje : password
		header("Location: /login.php");
		die();
	} else {
		$send_ = user_login($UserLogin, $User_Pass);

		if ($send_ == true) {
			header("Location: /index.php");
			die();
		} else {
			header("Location: /login.php");
			die();
		}
	}
}

?>