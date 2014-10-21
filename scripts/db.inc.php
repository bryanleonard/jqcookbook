<?php
	$dbhost = 'localhost'; //hostname
	$dbuser = 'root'; //database username
	$dbpass = ''; //database password
	$dbname = 'jquerycookbook'; //database name
	$db = new mysqli($dbhost, $dbuser, $dbpass);
	$db->select_db($dbname);

	if ($db->connect_errno > 0) {
		die('ERROR! - COULD NOT CONNECT TO mySQL DATABASE: ' . $db->connect_error);
	}
?>