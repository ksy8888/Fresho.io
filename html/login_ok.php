<meta charset="utf-8" />

<?php
		
	
	
      //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
      if(isset($_POST['phone'])&&isset($_POST['pwd'])){//post방식으로 데이터가 보내졌는지?
        $username=$_POST['phone'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
        $userpw=$_POST['pwd'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.
        //mysql root계정으로 접속.
        //비밀번호는 123456이다.
        //study라는 데이터베이스에 접근.
        $conn= mysqli_connect('localhost', 'fresho', 'fresh0813!', 'fresho');
        //sql문을 sql변수에 저장해놓는다.
        //$sql="SELECT * FROM Tjoin where phone='".$username."'&&pass='$userpw'";
		$sql="SELECT * FROM Tjoin where phone='$username'&&pass='$userpw'";
		
		if($_POST["phone"] == "fresho" || $_POST["pwd"] == "fresh08"){
			echo "<script>alert('관리자 로그인'); location.href='http://fresho.dothome.co.kr/ma.html';</script>";	
		}
		else{
		if($_POST["phone"] == "" || $_POST["pwd"] == ""){
		echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';}
		else{
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공	
			session_start();
			$_SESSION['phone'] = $username;
			$_SESSION['pwd']= $userpw;
		
		
			echo "<script>alert('로그인되었습니다.'); location.href='aaindex.html';</script>";		  
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
         echo '<script> alert("아이디나 패스워드 오류" ); history.back(); </script>';
        }
		}
		}
      }
    ?>
	
	
 <?php

	error_reporting(E_ALL);

	ini_set("display_errors",1);

	
	#ini_set("include_path='.:/usr/share/pear:/usr/share/php'",1);
	require_once ( 'php/config.php');
	require_once ( 'php/mysql.lib.php');
	#require_once '../php/config.php';

	#require_once '../php/mysql.lib.php';

	$link = getNewsConn();

?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>freshO(식자재)</title>
	<link rel="shortcut icon" type="image/x-icon" href="http://fresho.dothome.co.kr/main(image)/logo(finish).png" />
	<link rel ="stylesheet" type="text/css" href="css/aaindex.css">
	<meta property="og:locale" content="ko" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="freshO(식자재)" />
	<meta property="og:url" content="http://fresho.dothome.co.kr/" />
	<meta property="og:site_name" content="Fresho" />
	<meta property="og:image" src="main(image)/logo(finish).png" />
	<link href="css/aaindex.css" rel="stylesheet" type="text/css" >
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" >
	
	

	
</head>
	
<body class="home page">

	
		<header class="header">

					<div class="join">  
					<a href="http://fresho.dothome.co.kr/index.html">
					<img id="modal_open_btn" class="join-btn" src="main(image)/logout.png" alt=""></button> </a>
					<img id="serch2" src="main(image)/serch2.png" alt="serch2"/>
					<input type="text" class="cookse2" />
					<img class="serch2" id="ok2" src="main(image)/ok.png" alt="ok2"/>
					</div>
	
					
			
	
					
			<div class="header-box">
				<div class="header-left">
					<div class="logo">
						<a href="http://fresho.dothome.co.kr">
							<img class="logo-static" src="main(image)/logo(finish).png" alt="freshO"/>
						</a>
						
					</div>
				</div>
				
				
				
				
					<div class="nav-box">
						<ul class="menu-box">
							<li><a href="http://fresho.dothome.co.kr/list.html"/>
								<img class="menu" src="main(image)/fresh.png" alt="fresh"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/cook.html"/>
								<img class="menu" src="main(image)/cook.png" alt="cook"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/cafe.html"/>
								<img class="menu" src="main(image)/cafe.png" alt="cafe"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/mypage.html"/>
								<img class="menu" src="main(image)/mypage.png" alt="mypage"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/ex.html"/> 
							<!-- 예시 -->
								<img class="menu" src="main(image)/QnA.png" alt="QnA"/></a></li>
							<li><a class="btn" href="http://fresho.dothome.co.kr/bag.html" target="self"> 
								<img class="login-btn" src="main(image)/cart_ok.png" alt="cart"/></a></li></a> 
						</ul>
					</div>
				
					
			</div>
			
			
			

	</header>
	
	
	<div class="poket">
				<legend>총가격</legend> 
				</div>
	
	
					<div class = "first-box">								
							<div class ="flexslider">
							

									<img class="left" src="main(image)/left.png" alt="left"/></a></li>
									<ul class="slides">
										<li><img class="ad" src="main(image)/456_.png" alt="login"/></a></li>
										<li><img class="ad" src="main(image)/123.png" alt="login"/></a></li>

									</ul>
									<img class="right" src="main(image)/right.png" alt="right"/></a></li>
							</div>
					</div>
					<script src="js/jquery.js"> </script>
					<script src="js/jquery.flexslider.js"></script>
					<script>
						$(window)
						.load(function () {
							$('.flexslider')
							.flexslider({
								animation : "slide"
								});
							});
					</script>
					
					</body>

</html>	


				
	
