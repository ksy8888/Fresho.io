<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	require_once 'php/config.php';
	require_once 'php/mysql.lib.php';
	$link = getNewsConn();


	$post["name"] = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
	$post["phone"] =  filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
	$post["address"] = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
	$post["age"] =  (int) filter_input(INPUT_POST, "age", FILTER_SANITIZE_STRING);
	$post["pass"] =  filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
	$post["checkpass"] = filter_input(INPUT_POST, "checkpass", FILTER_SANITIZE_STRING);
	
	
	
	
	insertTjoin($link, $post);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>freshO(식자재)</title>
	<link rel="shortcut icon" type="image/x-icon" href="http://fresho.dothome.co.kr/main(image)/logo(finish).png" />
	<link rel ="stylesheet" type="text/css" href="css/login.css">
	<meta property="og:locale" content="ko" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="freshO(식자재)" />
	<meta property="og:url" content="http://fresho.dothome.co.kr/" />
	<meta property="og:site_name" content="Fresho" />
	<meta property="og:image" src="main(image)/logo(finish).png" />
	<link href="css/login.css" rel="stylesheet" type="text/css" >
	<link href="css/slide.css" rel="stylesheet" type="text/css" >
	


</head>
	
	
	<script type"text/javascript">
		alert('회원가입 완료! 로그인 창으로 이동합니다. ');
	
	</script>
<body class="login page" action = "login_ok.php">
	
		<header class="header">


					
	
			<div class="header-box">
				<div class="header-left">
					<div class="logo">
						<a href="http://fresho.dothome.co.kr">
							<img class="logo-static" src="main(image)/logo(finish).png" alt="freshO"/>
						</a>
						
					</div>
				</div>
			</div>
			
			
			

	</header>
	
	
	
	
					<div class = "first-box">								
							<div class ="login-logo">
							
									<img class="login" src="main(image)/login.png" alt="login"/></a></li>
								
						</div>
						
					</div>
				<hr>
				<form method="post"  action="login_ex.php" enctype="multipart/form-data">
					
							
							<input type="text" name ="phone" class="phonew" >
							<img class="phone" id="phone"   src="main(image)/phone.png" />	</input>
							<!-- <br /> -->
							
							<input type="password" name ="pwd" class="passw" >
							<img class="pass" id="pass"   src="main(image)/pass.png" /> </input>
							<!-- <br /> -->
						<button type="submit" id="oks"><img class="ok" src="main(image)/ok.png"/></button>
						<a href ="http://fresho.dothome.co.kr/find.html"/>
						<img class="passf" id="passf" src="main(image)/passf.png" alt="passf"/></a>
					</form>
					
					
										
					
	</body>

</html>	
