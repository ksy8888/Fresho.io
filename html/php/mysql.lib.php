<?php



	function getNewsConn() {

		$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

		mysqli_set_charset($link, "utf8");

		

		return $link;

	}

	

	function getADT($link, $opt = null, $num =1) {

		if($num == 0) {
			$limit = null;
		}

		else {
			$limit = "LIMIT 0, $num";
		}

		if($opt == null) {

			$sql = "SELECT `p`.`no`, `p`.`img`, `p`.`date`, `p`.`option`

			FROM `ADT` `p`

			$limit";

		}

		else {

			$sql = "SELECT `p`.`no`, `p`.`img`, `p`.`date`, `p`.`option`

			FROM `ADT` `p`

			WHERE `p`.`option` = ${opt}

			$limit";

		}
		//echo $sql;
		$rs = mysqli_query($link, $sql);
		
		if(mysqli_num_rows($rs) == 0) {
			return null;
		}
		else {
			while($rows[] = mysqli_fetch_assoc($rs));
			return $rows;
		}
	}
		
		
		
		
		
	function getList($link, $num = 0) {
		if($num == 0) {
			$limit = null;
		}

		else {
			$limit = "LIMIT 0, $num";
		}
		
		$sql = "SELECT `no`, `option`, `img`, `comment`, `name`, `from`, `price`
		FROM `List` $limit";
		
		//echo $sql;
		
		$rs = mysqli_query($link, $sql);
		
		if(mysqli_num_rows($rs) == 0) {
			return null;
			} else {
			while ($rows[] = mysqli_fetch_assoc($rs));
			return $rows;
		}
	}
		
	
	
	
	function getCafe($link, $num = 0) {
		if($num == 0) {
			$limit = null;
		}

		else {
			$limit = "LIMIT 0, $num";
		}
		
		$sql = "SELECT `no`, `option`, `img`, `comment`, `name`, `from`, `price`
		FROM `Cafe` $limit";
		
		//echo $sql;
		
		$rs = mysqli_query($link, $sql);
		
		if(mysqli_num_rows($rs) == 0) {
			return null;
			} else {
			while ($rows[] = mysqli_fetch_assoc($rs));
			return $rows;
		}
	}





	function getCooks($link, $num = 0) {
		if($num == 0) {
			$limit = null;
		}

		else {
			$limit = "LIMIT 0, $num";
		}
		
		$sql = "SELECT `no`, `option`, `img`, `comment`, `name`
		FROM `cooks` $limit";
		
		//echo $sql;
		
		$rs = mysqli_query($link, $sql);
		
		if(mysqli_num_rows($rs) == 0) {
			return null;
			} else {
			while ($rows[] = mysqli_fetch_assoc($rs));
			return $rows;
		}
	}





	function getUser($link, $num = 0) {
		if($num == 0) {
			$limit = null;
		}

		else {
			$limit = "LIMIT 0, $num";
		}
		
		$sql = "SELECT `no`, `name`, `age`, `pass`, `checkpass`, `date`
		FROM `List` $limit";
		
		//echo $sql;
		
		$rs = mysqli_query($link, $sql);
		
		if(mysqli_num_rows($rs) == 0) {
			return null;
			} else {
			while ($rows[] = mysqli_fetch_assoc($rs));
			return $rows;
		}
	}
	
	
	
	function insertTjoin($link, $array) {
		$field = $value = null;
		foreach ($array as $key => $val) {
			if($val !== null) {
				$field .= "`$key`,";
				if(gettype($val) == "string") {
					$value .= "'$val',";
					} else {
					$value .= "$val,";
				}
			}
		}
		$field = "(" . $field .")";
		$value = "(" . $value .")";
		$field = str_replace(",)", ")", $field);
		$value = str_replace(",)", ")", $value);
		
		$sql = "INSERT INTO `Tjoin` $field VALUES $value";
	//	echo $sql;
		
		mysqli_query($link, $sql);
	} 



function insertResult($link,$array){
		
		$field = $value = null;
		
		foreach ($array as $key => $val){
			if($val !== null){
				$field .= "`$key`,";
				
				
				if(gettype($val) == "string"){
					$value .= "'$val',";	
					}else{
					$value .= "$val,";
				}
				
			}
		}
		
		
		
		$field = "("  .$field. ")";
		$value = "("  .$value. ")";
		$field = str_replace(",)",")",$field);
		$value = str_replace(",)",")",$value);
		
		$sql = "INSERT INTO `List`$field VALUES $value";
		// "INSERT INTO products(name, price, type, des, img) VALUES('$name', '$price', '$type', '$des', '$img')";

		echo $sql;
		
		mysqli_query($link, $sql);
		
		
	}
	
	
	
	function insertTlogin($link, $array) {
		//<!--php?????? form??? ????????? ????????? ????????????????????? ???????????? ????????? ????????? ????????????.-->
      if(isset($_POST['phone1'])&&isset($_POST['pass1'])){//post???????????? ???????????? ????????????????
        $username=$_POST['phone1'];//post???????????? ?????? ???????????? username????????? ????????? ?????????.
        $userpw=$_POST['pass1'];//post???????????? ?????? ???????????? userpw?????? ????????? ?????????.
        //mysql root???????????? ??????.
        //??????????????? 123456??????.
        //study?????? ????????????????????? ??????.
        $conn= mysqli_connect('localhost','fresho','fresh0813!','fresho');
        //sql?????? sql????????? ??????????????????.
        $sql="SELECT * FROM Tjoin where phone='$username'&&pass='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//???????????? ???????????? ????????? ????????? ????????? ??????
         echo'<script type="text/javascript">
			alert("abc");
		</script>';
        
        }
        else{//???????????? ????????? ????????? ????????? fail??? ????????????.
          echo "login fail";
        }
      }
	} 

?>