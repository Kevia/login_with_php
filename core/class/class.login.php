<?php 
/**
 * Login Class
 *
 * @package Login with php
 * @author Kevia Developer ~ dev.kevia@gmail.com
 */

include_once($_SERVER['DOCUMENT_ROOT'].'/core/inc/config.php');

//login fnc
function user_login($user_login, $user_pass) {
	if ($user_login == ""||$user_pass == "") {
		return false;
	} else {
		if (valid_email($user_login) == true) {
			$proveri_usera = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `email` = '$user_login' AND `password` = '$user_pass'"));
		} else {
			$proveri_usera = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `username` = '$user_login' AND `password` = '$user_pass'"));
		}

		if (!$proveri_usera) {
			return false;
		} else {
			setcookie('login', $proveri_usera['id'], time() + 60*60*24*7); // 7 days
			$_SESSION['login'] = $proveri_usera['id'];

			return true;
		}
	}
}

//valid mail
function valid_email($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        return true;
    } else {
        return false;
    }
}

//user_login_if
function is_user_login() {
	if (isset($_SESSION['login'])) {
		return true;
	} else {
		return false;
	}
}

?>