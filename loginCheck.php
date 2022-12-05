<?php
session_start();
$host = 'localhost';
$user = 'wnsrud1133';
$pw = '1234';
$dbName = 'SK';
$con = new mysqli($host, $user, $pw, $dbName);

$user_id = $_POST['user_id']; // 아이디
$user_pw = $_POST['user_pw']; // 패스워드

$query = "select * from member where user_id='$user_id' and user_pw='$user_pw'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($user_id==$row['user_id'] && $user_pw==$row['user_pw']){ // id와 pw가 맞다면 login
   $_SESSION['id'] = $user_id;
	echo "<script> location.href = 'main.php'; </script>";
}else{ // id 또는 pw가 다르다면 admin_login 폼으로

   echo "<script> alert('로그인 실패'); </script>";
   echo "<script> location.href = 'login.html'; </script>";

}

?>