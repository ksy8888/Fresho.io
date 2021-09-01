<meta charset="utf-8" />



<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	require_once 'php/config.php';
	require_once 'php/mysql.lib.php';
	$link = getNewsConn();


$post["phone1"] =  (int) filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
$post["pass1"] =  (int) filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);


	insertTlogin($link, $post);

    ?>