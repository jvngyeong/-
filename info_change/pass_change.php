<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/simple-sidebar.css">
	</head>

	<body style="overflow-x: hidden">
    <div id="page1" class="slide-in">
	<div class="top1">
                    <a style="padding:0 0 0 7px;">
                    <img src="../images/main_icon.png" width ="47" alt="">
                    </a>

					<a style="padding:8px 20px 0 0; float:right;">
					<?php
					session_start();
					echo $_SESSION['id']."님";
					?>
					</a>
                </div>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-5">
						<div class="login-wrap p-4 p-md-5">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-user-o"></span>
					</div>
					<h3 class="text-center mb-4">변경하실 패스워드를<br>입력하세요.<br><br><br><br><br><br></h3>
						<form action="pass_change_process.php" class="login-form" method="post">
						<div class="form-group">
							Password
							<input type="password" id="user_pw" name="user_pw" class="form-control rounded-left" placeholder="Password" required>
						</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary rounded submit p-3 px-5">변경</button>
					</div>
				</form>
				</div>
					</div>
				</div>
			</div>
            <div class="sidebar">
				<span class="sidebar-brand">
					<img src="../images/menu_icon.png" width ="47" alt=""><input class = "logout" type="button" value="로그아웃" onclick="location.href='../logout.php'" style="float: right;"/><br/>
				</span>
				<ul class="sidebar-nav">
					<li>
						<a href="../ex_recommend.php">
							운동 추천
						</a>
					</li>
					<li>
						<a href="../ex_guide.php">
							운동 지도
						</a>
					</li>
					<li>
						<a href="../diet_recommend.php">
							식단 추천
						</a>
					</li>
					<li>
						<a href="../setting.php">
							설정
						</a>
					</li>
					<li>
						<a href="javascript:void(0)" data-toggle="sidebar"><i class="glyphicon glyphicon-arrow-left"></i>닫기</a><br/>
					</li>
				</ul>
			</div>
		</section>
	</div>


	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="../js/simple-sidebar.js"></script>
<div id="footer2" class="footer2">
					<a class="btn2" style="margin: 1% 13.5% 0 6%;" href="javascript:void(0)" class="btn btn-default" data-toggle="sidebar"><img src="../images/menu_icon.png" width ="47" alt=""></a>
					<button class="btn2" style="margin: 1% 7% 0 6%;"><img src="../images/home_icon.png" width ="47"  onclick="location.href='../main.php'"></button>
					<button class="btn2" style="margin: 1% 6% 0 7%;"><img src="../images/setting_icon.png" width ="47"  onclick="location.href='../setting.php'"></button>
			</div>
	</body>
</html>

