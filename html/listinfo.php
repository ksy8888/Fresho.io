<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>fresho 음료상세페이지</title>
<link rel="stylesheet" type="text/css" href="css/test.css" />
</head>
<body>
	
	
	<?php
		$bno = $_GET['no']; /* bno함수에 no값을 받아와 넣음*/
		$sql = mq("select * from List where no='".$bno."'"); /* 받아온 idx값을 선택 */
		
		$shopinfo = $sql->fetch_array();
		
	?>
	
	<div id="bg1"></div>
	<div id="main_in">
		<div id="menu">
			<div id="logo"><a href="/"><img src="main(image)/logo(finish).png" title="shop_icon"/></a></div>
				
			</div>	
				<div id="content">

					<div id="shop_p_img">
								
					<img src="<?php echo $shopinfo['img'];?>" alt="propic" title="propic" />
									
					</div>
					<div id="shop_p_info">
						<ul>
							<li>상품제목 : <?php echo $shopinfo['name']; ?></li>
							<li>원산지 : <?php echo $shopinfo['from']; ?></li>
							<li>가격 : <?php echo $shopinfo['price']; ?></li>
						</ul>
						<div id="shop_icon">
							<ul>
								<li><a href="#"><img src="list(image)/buy.png" alt="buy_icon" title="buy_icon" /></a></li>
								<li><a href="/page/basket_ok.php?idx=<?php echo $shopinfo['no'];?>"><img src="list(image)/basket.png" alt="" title="" /></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<footer></footer>
</body>
</html>