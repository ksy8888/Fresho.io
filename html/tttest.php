<?php	
	session_start();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	
	<body>
		<?php 
		
			$username = $_SESSION['phone'];
			echo "<p><strong>$username</strong>($username)님 환영합니다.";
			
		?>
		
		
		
	</body>
	
</html>
