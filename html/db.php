<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩


	$conn= mysqli_connect('localhost', 'fresho', 'fresh0813!', 'fresho');
	//$db = new mysqli("localhost","fresho","fresh0813!","fresho");
	$conn->set_charset("utf8");

	function mq($sql)
	{
		global $conn;
		return $conn->query($sql);
	}
?>