<?php
    session_start();

	$host = 'localhost';
	$user = 'wnsrud1133';
	$pw = '1234';
	$dbName = 'SK';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$user_id = $_SESSION['id'];

	$sql = "DELETE FROM member WHERE user_id = '".$user_id."'";

    if($mysqli->query($sql)){ 
        unset($_SESSION["id"]);
		echo "
        <script type=\"text/javascript\">
            alert(\"정상처리 되었습니다.\");
            location.href = \"../login.html\";
        </script>";
	}else{
        echo '<script>alert("실패했습니다.")</script>';
        echo "<script>location.href='../setting.php'</script>";
    }
    mysqli_close($mysqli);

?>