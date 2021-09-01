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
		$sql = mq("select * from Cafe where no='".$bno."'"); /* 받아온 idx값을 선택 */
		
		$shopinfo = $sql->fetch_array();
		
	?>
	
	<script type="text/javascript">
		
		function incre(e) {
			var cot = document.getElementById("count")[0];
			var a = parseInt(cot.value);
			
			if(e==1) 
				a += 1
			 else 
				a -= 1;
			
			
			if( a<1) return;
			cot.value=a;
			
		}
		
	</script>
	
	<div id="bg1"></div>
	<div id="main_in">
		<div id="menu">
			<div id="logo"><a href="http://fresho.dothome.co.kr/aaindex.html"><img src="main(image)/logo(finish).png" title="shop_icon"/></a></div>
				
			</div>	
				<div id="content">

					<div id="shop_p_img">
								
					<img src="<?php echo $shopinfo['img'];?>" alt="propic" title="propic" />
									
					</div>
					<div id="shop_p_info">
						<ul>
							<li>상품 제목 : <?php echo $shopinfo['name']; ?></li>
							
							<li>가격 : <?php echo $shopinfo['price']; ?>원</li>
						</ul>
						<div id="shop_icon">
							<ul>
								<li><a href="#"><img src="list(image)/buy.png" alt="buy_icon" title="buy_icon" /></a></li>
								<li><a href="basket_ok.php?no=<?php echo $shopinfo['no'];?>"><img src="list(image)/basket.png" alt="" title="" /></a></li>
							</ul>
						</div>
							
						<div id="count_icon">
						수량: <input type="text" name="count" value='1'>
						
						
							<div id = "count_icon2">
								<ul>
									<li><img src="list(image)/up.png" onclick="incre(1);"  /></li>
									<li><img src="list(image)/down.png" onclick="incre(-1);" /></li>
									<input type="hidden" name="_count" value='1'>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<footer></footer>
</body>
</html>