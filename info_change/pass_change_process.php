<?php
    session_start();

	$host = 'localhost';
	$user = 'wnsrud1133';
	$pw = '1234';
	$dbName = 'SK';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$user_id = $_SESSION['id'];
	$user_pw = $_POST['user_pw'];

	$sql = "UPDATE member SET user_pw= '".$user_pw."' WHERE user_id = '".$user_id."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

	if($mysqli->query($sql)){ 
		echo "<script>location.href='change_end.php'</script>";
	}else{
        echo '<script>alert("실패했습니다.")</script>';
        echo "<script>location.href='main.php'</script>";
    }
    mysqli_close($mysqli);
?>