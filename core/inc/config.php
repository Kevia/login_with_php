<?php
error_reporting(E_ALL);
session_start();
ob_start();

// ** MySQL hostname ** //
define('DB_HOST', 'localhost');

// ** MySQL database username ** //
define('DB_USER', 'root');

// ** MySQL database password ** //
define('DB_PASS', '');

// ** The name of the database ** //
define('DB_NAME', 'login_with_php');


// ** System URL ** //
define('URL_Site', 'http://localhost/'); // e.g (http://example.com)


// ** CONNECT MYSQL ** //
if (!$conn_db = @mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
	die("<li> Sorry, site is not connecting to database. </li>");
}

if (!mysql_select_db(DB_NAME, $conn_db)) {
	die("<li> Sorry, cannot search to database. </li>");
}

//..

include_once($_SERVER['DOCUMENT_ROOT'].'/core/inc/inc.php');

?>