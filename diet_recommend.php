<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="stylesheet" href="css/login.css">
	</head>

	<body style="max-width: 100%;  overflow-x:hidden;">
		<div id="page1" class="slide-in">
        <div class="top1">
                    <a style="padding:0 0 0 7px;">
                    <img src="images/main_icon.png" width ="47" alt="">
                    </a>

					<a style="padding:8px 20px 0 0; float:right;">
					<?php
					session_start();
					echo $_SESSION['id']."님";
					?>
					</a>

        </div>
			<section class="ftco-section">
            <details class="detail1">
                <summary class="summary1">다이어트 식단</summary>
                <details>
                    <summary class="summary2">도시락</summary>
                    <img style="width: 100%;" src="images/diet_food1.jpg">
                    <p>고등어 구이와 가지 구이, 각종 채소 스틱을 곁들인 도시락</p>
                    </details>
                <details class="detail2">
                    <summary class="summary2">비빔밥</summary>
                    <img style="width: 100%;" src="images/diet_food2.jpg">
                    <p>저당 고추장과 유리병 참치를 활용한 건강 참치 비빔밥</p>
                    </details>
                <details class="detail2">
                    <summary class="summary2">건강 식사</summary>
                    <img style="width: 100%;" src="images/diet_food3.jpg">
                    <p>야채의 비율이 항상 50%가 넘도록 유지!</p>
                    </details>
                <details class="detail2">
                    <summary class="summary2">비트 무말랭이 무침</summary>
                    <img style="width: 100%;" src="images/diet_food4.jpg">
                    <p> 비트 무말랭이 무침(NO 설탕!), 양파와 고기 볶음. 항상 도시락 두개에 하나는 탄수화물과 단백질로 채우고 나머지는 모두 채소로 채워 비율을 유지했어요.</p>
                    </details> 
                <details class="detail2">    
                    <summary class="summary2">파스타</summary>
                    <img style="width: 100%;" src="images/diet_food5.jpg">
                    <p>현미 파스타 면을 이용한 바질 페스토 오일 파스타. 올리브 오일과 소금 후추를 넣은 잎채소 샐러드를 함께 곁들여 먹었어요.</p>
                    </details>
                <details class="detail2">
                    <summary class="summary2">볶음밥</summary>
                    <img style="width: 100%;" src="images/diet_food6.jpg">
                    <p>브로콜리와 파프리카, 버섯, 닭가슴살 등 탄단지 구성이 훌륭한 볶음밥.</p>
                    </details>
            </details>
            <br><br>

            <details class="detail">
                <summary class="summary1">고단백 음식</summary>
                <details class="detail2">
                    <summary class="summary2">닭가슴살</summary>
                    <img style="width: 100%;" src="images/protain_food1.jpg">
                    <p>고단백 음식으로 닭가슴살을 빼놓으면 섭섭합니다. 껍질을 포함하지 않은 닭가슴살을 말하며, 이 고기에는 큰 비중으로 단백질이 포함됩니다.  요리에 포함시키기로 편리하고 맛도 좋은 편이기 때문에 많은 다이어터와 헬스인들에게 사랑받는 식품입니다.</p>
                </details>
                <details class="detail2">
                    <summary class="summary2">연어</summary>
                    <img style="width: 100%;" src="images/protain_food2.jpg">
                    <p>연어는 일반적으로 오메가3를 많이 포함하고 있어 콜레스테롤 관리를 위해 좋은 식품으로 알려져있습니다. 그러나 연어는 심장건강을 위해 좋을 뿐만 아니라 고단백식품으로 날것으로도 익혀서도 먹을 수 있습니다.</p>
                </details>
                <details class="detail2">
                    <summary class="summary2">달걀</summary>
                    <img style="width: 100%;" src="images/protain_food3.jpg">
                    <p>단백질 공급원으로서 더없이 좋은 달걀은 특히 흰자에 많은 단백질이 포함되어있습니다. 노른자 또한 단백질이 많긴 하지만, 한꺼번에 많은 양을 섭취할때 문제가 될수 있기에 단백질 섭취를 위해서는 달걀 흰자가 추천됩니다.</p>
                </details>
                <details class="detail2">
                    <summary class="summary2">렌틸콩</summary>
                    <img style="width: 100%;" src="images/protain_food4.jpg">
                    <p>많은 곡식류 중에서 특히 렌틸콩의 높은 단백질함량때문에 채식주의자들에게 사랑받는 식품입니다. 렌틸콩은 단백질 뿐만 아니라 섬유질과 비타민, 미네랄과 항산화물질까지 많이 포함되어있기 때문에 건강에 도움이 됩니다.</p>
                </details> 
                <details class="detail2">        
                    <summary class="summary2">두부</summary>
                    <img style="width: 100%;" src="images/protain_food5.png">
                    <p>콩은 훌륭한 단백질공급언이지만 소화흡수율이 높지않은 편입니다. 그러한 단점을 완전히 보완한 식품이 바로 두부인데요. 콩의 단백질을 고스란히 섭취할 수 있습니다. 그러나 수분함량이 80%이상으로 원하는 단백질을 모두 채우기 위해서는 포만감이 더 앞설수도 있습니다. </p>
                </details>
                <details class="detail2">        
                    <summary class="summary2">저지방 요거트</summary>
                    <img style="width: 100%;" src="images/protain_food6.jpg">
                    <p>수년전부터 그릭요거트가 선풍적인 인기를 끌고 있습니다. 당류가 첨가되지않고 우유의 단백질이 많이 포함된 유제품이 바로 그릭요거트인데요. 요거트는 유산균도 다량 함유되어있기 때문에 건강에 도움이 되고, 견과류와 과일을 함께 섭취하면 한끼로서는 충분한 영양소를 보충할 수 있습니다.</p>
                </details>
            </details>
            <br><br>
            <details class="detail1">
                <summary class="summary1">간헐적 단식</summary>
                <details class="detail2">
                    <summary class="summary2">저녁1식</summary>
                    <p>1일1식 초기시행자들이 권장한 식사 시간으로, 저녁 식사가 인체의 휴식과 수면의 품질에 영향을 준다는 가설에 따라 시행되었다. 낮 시간 동안에는 공복을 유지하고 저녁에만 식사를 하는데, 사람마다 다르겠지만 보통 아침에는 졸림 때문에 입맛이 없고 막 활동을 시작하는 시간이라서 참을 만 한 사람이 많다. 특히 같은 이유로 아침을 거르는 사회인들 역시 낮 시간 동안에는 큰 배고픔을 느끼지 않는다. 그러나 본격적인 활동을 시작하는 오후에는 공복감을 크게 느끼게 되며, 이 때의 공복감을 해소하지 않으면 곧바로 체력과 정신력이 저하되고 배고픔에 수면도 어려워진다.</p>
                </details>
                <details class="detail2">
                    <summary class="summary2">점심1식</summary>
                    <p>저녁과 오전에는 굶고 점심에만 한 끼 먹는다. 식사를 마치자마자 바로 오후 활동을 시작하기에, 탄수화물을 좀 더 자유롭게 섭취해도 안심할 수 있다. 바로 소비할 수 있으니까. 또한 밤에만 1끼 먹는 저녁 1식은 폭식할 우려가 크지만, 점심은 다른 사람들과 함께 먹는 시간대라서 폭식할 가능성이 현저하게 줄며, 밤처럼 식욕이 폭발하지도 않는다. 단점은 밤에 공복감에 괴롭다는 문제가 있으며, 점심에 먹은 식사를 그날 오후에 소비한다는 개념이기에, 다음날 아침에 몸에 힘이 없을 수 있다. 물론 3, 4일 정도 적응하면 그런 일은 사라지겠지만, 그 동안은 무척 괴롭다...</p>
                </details>
                <details class="detail2">
                    <summary class="summary2">아침1식</summary>
                    <p>점심과 저녁을 굶고 아침에만 한 끼 먹는다. 아침 식사의 중요성은 널리 알려져 있지만, 1일1식을 커뮤니티에서는 의외로 소수만이 선택하는 식사 시간이다. 제대로 실시할 경우 가장 강력한 효과를 볼 수 있다. 강력한 효과를 볼 수 있는만큼 반동도 굉장히 크다. 아침에만 먹기 때문에 저녁에 과할 정도로 큰 허기감을 느끼며, 또한 밥을 먹는다고 바로 몸에 글리코겐이 꽉꽉 채워지는 게 아니라 어느 정도 소화 시간이 걸리기 때문에 매일 아침마다 점심1식보다 몸의 힘 없는 느낌이 더 클 수 있다. 또한 아침은 보통 사람들이 바로 활동을 시작하느라 준비하는 시간이라서 제대로 식사 시간에 맞춰서 일어나야지 올바르게 챙겨 먹을 수 있다. 가령 아침1식을 한다는데 늦잠 자서 출근을 서둘러야 한다고 토스트 한 두 장으로 떼우면 몸에 해롭다는 것. 영양이 과하게 부족한 것은 둘쨰 치고, 영양 불균형이다.</p>
                </details>
            </details>
            <br><br><br><br><br>

            

			<div class="sidebar">
				<span class="sidebar-brand">
					<img src="images/menu_icon.png" width ="47" alt=""><input class="logout" type="button" value="로그아웃" onclick="location.href='logout.php'" style="float: right;"/><br/>
				</span>
				<ul class="sidebar-nav">
					<li>
						<a href="ex_recommend.php">
							운동 추천
						</a>
					</li>
					<li>
						<a href="ex_guide.php">
							운동 지도
						</a>
					</li>
					<li>
						<a href="diet_recommend.php">
							식단 추천
						</a>
					</li>
					<li>
                        <a href="setting.php">
							설정
						</a>
					</li>
					<li>
						<a href="javascript:void(0)" data-toggle="sidebar"><i class="glyphicon glyphicon-arrow-left"></i>닫기</a><br/>
					</li>
				</ul>
			</div><br>
			</section>
		</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/simple-sidebar.js"></script>
<div id="footer2" class="footer2">
					<a class="btn2" style="margin: 1% 13.5% 0 6%;" href="javascript:void(0)" class="btn btn-default" data-toggle="sidebar"><img src="images/menu_icon.png" width ="47" alt=""></a>
					<button class="btn2" style="margin: 1% 7% 0 6%;"><img src="images/home_icon.png" width ="47"  onclick="location.href='main.php'"></button>
					<button class="btn2" style="margin: 1% 6% 0 7%;"><img src="images/setting_icon.png" width ="47"  onclick="location.href='setting.php'"></button>
			</div>
	</body>
</html>

