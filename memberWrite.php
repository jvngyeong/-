<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'wnsrud1133';
		$pw = '1234';
		$dbName = 'SK';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$user_id = $_POST['user_id'];
		$user_pw = $_POST['user_pw'];
		$email = $_POST['email'];
		$name = $_POST['name'];
	    $phone = $_POST['phone'];
	    $birth = $_POST['birth'];



		$sql = "insert into member (
			user_id,
			user_pw,
			email,
			name,
			phone,
			birth
		)";
		
		$sql = $sql. "values (
				'$user_id',
				'$user_pw',
				'$email',
				'$name',
				'$phone',
				'$birth'
		)";

		if($mysqli->query($sql)){ 
			$_SESSION['id'] = $user_id;
			echo "<script>location.href='join_end.html'</script>";
		}else{ 
		  echo '<script>alert("회원가입에 실패했습니다.")</script>';
		  echo "<script>location.href='login.html'</script>";
		}

		mysqli_close($mysqli);
	  
	?>


</html>