<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	require_once ( 'php/config.php');
	require_once ( 'php/mysql.lib.php');
	
	$link = getNewsConn();

/*
	$post{"title"} = (isset($_post{"title"})) ? $_POST{"title"} : "Title";
	$post{"option"} = (int) ((isset ($_POST{"option"})) ? $_POST{"option"} : 0);
	$post{"category"} = (int) ((isset ($_POST{"category"})) ? $_POST{"category"} : 0);
	$post{"uri"} = (isset ($_POST{"uri"})) ? $_POST{"uri"} : null;
	$post{"author"} = (int) ((isset ($_POST{"author"})) ? $_POST{"author"} : 0);
	$post{"contents"} = (isset ($_POST{"contents"})) ? $_POST{"contents"} : null;
*/
	// $post["userid"] = filter_input(INPUT_POST, "userid", FILTER_SANITIZE_STRING);
	// $post["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	// $post["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	// $post["email"] = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
	// $post["phone"] = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
	
	// if ($_FILES["photo"]["size"] != 0) {
	// $updir = "list(image)";
	// if(!file_exists($updir)) {
	// mkdir($updir, 0777, true);
	// }
	// if (is_dir($updir)) {
		// $post["photo"] = "{$updir}/" .$post["userid"]. $_FILES["photo"]["name"];
		// if (!move_uploaded_file($_FILES["photo"]["tmp_name"],
			// $post["photo"])) {
				// unset($post["photo"]);
			// }
		// }
	// }
	// insertResult($link, $post);
	
	
	$post["option"] = filter_input(INPUT_POST, "option", FILTER_SANITIZE_STRING);
	$post["img"] = filter_input(INPUT_POST, "img", FILTER_SANITIZE_STRING);
	$post["comment"] = filter_input(INPUT_POST, "comment", FILTER_SANITIZE_STRING);
	$post["name"] = (int) filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
	
	if ($_FILES["img"]["size"] != 0) {
		$updir = "list(image)";
			if(!file_exists($updir)) {
				mkdir($updir, 0777, true);
				}
				
			if (is_dir($updir)) {
				$post["img"] = "{$updir}/" . $_FILES["img"]["name"];
				
					if (!move_uploaded_file($_FILES["img"]["tmp_name"],
						$post["img"])) {
						unset($post["img"]);
			}
		}
	}
	insertResult($link, $post);
?>