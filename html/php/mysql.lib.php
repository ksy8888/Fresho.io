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
		//<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
      if(isset($_POST['phone1'])&&isset($_POST['pass1'])){//post방식으로 데이터가 보내졌는지?
        $username=$_POST['phone1'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
        $userpw=$_POST['pass1'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.
        //mysql root계정으로 접속.
        //비밀번호는 123456이다.
        //study라는 데이터베이스에 접근.
        $conn= mysqli_connect('localhost','fresho','fresh0813!','fresho');
        //sql문을 sql변수에 저장해놓는다.
        $sql="SELECT * FROM Tjoin where phone='$username'&&pass='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
         echo'<script type="text/javascript">
			alert("abc");
		</script>';
        
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
          echo "login fail";
        }
      }
	} 

?>