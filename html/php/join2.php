<?php

	error_reporting(E_ALL);

	ini_set("display_errors",1);

	require_once 'php/config.php';
	require_once 'php/mysql.lib.php';
	$link = getNewsConn();
	
	$name = $POST['name'];
	$phone = $POST['phone'];
	$address = $POST['address'];
	$age = $POST['age'];
	$pass = $POST['pass'];
	$checkpass = $POST['checkpass'];
	
	$sql = mq("insert into Tjoin (name, phone, address,age, pass, checkpass) values('".$name."', '".$phone."', '".$address."', '".$age."', '".$pass."', '".$checkpass."')");
?>

<meta charset="utf-8" />
<script type = text/javascript">alert('완료');</script>
<meta http-equiv="refresh" content="0 url=/">
