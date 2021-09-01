<?php include "db.php"; ?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>메인페이지</title>
</head>

<body>
	<?php
		if(isset($_SESSION['phone'])){
		echo "<h2>{$_SESSION['phone']} 님 환영합니다.</h2>";
	
	?>
	

	<?php 
		}else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	} 
	?>
	
</body>

</html>