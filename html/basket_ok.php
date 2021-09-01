<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>쇼핑몰 장바구니 예제</title>
<link rel="stylesheet" type="text/css" href="css/test.css" />
</head>
<body>
	
	<?php
		$bno = $_GET['no']; /* bno함수에 no 받아와 넣음*/
		$sql = mq("select * from Cafe where no='".$bno."'"); /* 받아온 no값을 선택 */
		$shopinfo = $sql->fetch_array();


		$ba_pic = $shopinfo['img'];
		$ba_name = $shopinfo['name'];
		$ba_price = $shopinfo['price'];

		$sql2 = mq("insert into basket(img,name,price) values('".$ba_pic."','".$ba_name."','".$ba_price."')");

		echo "<script>alert('장바구니에 등록되었습니다.');</script>";

	?>
	<div id="content">
					<h2>장바구니</h2>
					 <table class="list-table">
				      <thead>
				          <tr>
				              <th width="350">상품정보</th>
				              <th width="120">상품금액</th>
				         
				           </tr>
				        </thead>
				        <?php 
				        	$sql3 = mq("select * from basket order by no asc");
							while($bask = $sql3->fetch_array()){
						?>
				        <tbody>
				        <tr>
				          <td width="300">
				          	<div class="bak_item">
							<div class="proimg"><img src="<?php echo $bask['img'];?>" alt="propic" title="propic" /></div>
							<div class="proname"><?php echo $bask['name'];?></div>
						</div>
				          </td>
				          <td width="150"><?php echo $bask['price'];?></td>
				          
				       
				        </tr>
				      </tbody>
				  <?php } ?>
				    </table>
				
	</div>
		<footer></footer>
</body>
</html>