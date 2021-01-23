<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>kt스토어</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" type="text/css">
</head>

<body>

<div id="wrap">

	<!--헤더 사이드바-->
	<nav id="sidebar">
		<div id="dismiss">
			<div class="a-arrow-left"><img src="./img/back.png" alt=""></div>
		</div>
		<div class="sidebar-header">
			<h3><a href="./index.html"><img src="./img/logo.png" alt=""></a></h3>
		</div>
		<ul class="list-unstyled">
			<li class="active">
				<a href="./mobile2_list.html" data-toggle="collapse" aria-expanded="false">삼성</a>
			</li>
			<li>
				<a href="./mobile2_list.html">엘지</a>
			</li>
			<li>
				<a href="./mobile2_list.html">애플</a>
			</li>
			<li>
				<a href="./mobile2_list.html">기타 해외폰</a>
			</li>
			<li>
				<a href="./mobile2_list.html">스마트기기</a>
			</li>
			<li>
				<a href="./mobile2_list.html">에그</a>
			</li>
			<li>
				<a href="./mobile2_list.html">태블릿</a>
			</li>
			<li>
				<a href="./mobile2_list.html">인터넷</a>
			</li>
			<li>
				<a href="./mobile2_list.html">사전예약 EVENT</a>
			</li>
			<ul class="list-unstyled left_list">
				<li><a href=""><img src="./img/side_notic.png" alt="">공지사항</a></li>
				<li><a href=""><img src="./img/side_qna.png" alt="">고객센터</a></li>
				<li><a href="http://online.kt.com/Main.jsp"><img src="./img/side_order.png" alt="">주문조회</a></li>
			</ul>
		</ul>
	</nav>

	<!--헤더-->
	<div id="content">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">

				<button type="button" id="sidebarCollapse" class="btn btn-info">
					<span><img src="./img/menu_toggle_btn.png" alt=""></span>
				</button>
				<span class="center-block"><a href="./index.html"><img src="./img/logo.png" alt=""></a></span>
				<button type="button" id="find" class="btn btn-info">
					<span id="find"><img src="./img/find.png" alt=""></span>
				</button>
			</div>
		</nav>
	</div>

	<!--검색 누르면 나오는 창-->
	<div id="find_bar" class="a-arrow-left">
		<form method="post" class="a-arrow-left">
			<input type="search" placeholder="검색어를 입력해주세요.">
		</form>
		<button type="button" id="find_btn" class="btn">
			<span id="find"><img src="./img/find.png" alt=""></span>
		</button>
		<div id="find_close">
			<div class="a-arrow-left">X</div>
		</div>
	</div>


	<div class="container" style="">
		<!--메인 슬라이드-->
		<div class="swiper-container swiper1">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><a href=""><img src="./img/slider1.jpg" alt=""></a></div>
				<div class="swiper-slide"><a href=""><img src="./img/slider1.jpg" alt=""></a></div>
				<div class="swiper-slide"><a href=""><img src="./img/slider1.jpg" alt=""></a></div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="baner_slider">
			<div class="swiper-container swiper2">
				<h3>지금 HOT한 소식</h3>
				<div class="swiper-wrapper">
					<div class="swiper-slide"><a href=""><img src="./img/m_slide2.jpg" alt=""></a></div>
					<div class="swiper-slide"><a href=""><img src="./img/m_slide3.jpg" alt=""></a></div>
					<div class="swiper-slide"><a href=""><img src="./img/m_slide1.jpg" alt=""></a></div>
					<div class="swiper-slide"><a href=""><img src="./img/m_slide4.jpg" alt=""></a></div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
		
		<!--신상폰-->
		<div class="new_model">
			<ul class="model_title">
				<li>
					<h3 class="">따끈따끈한 신상폰!</h3>
				</li>
				<li><a href="./mobile2_list.html">전체보기></a></li>
			</ul>

			<div class="model_wrap">
				<a href="mobile2_model.html">
					<ul class="model_box">
						<li class="model_img"><img src="./img/a2020n3.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/aip11.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/aip11_64.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m1.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>

			</div>
		</div>

		<!--
<div class="s_banner bane2">
<a href="#"><div><img src="./img/banner1.jpg" alt="배너1"></div></a>
</div>
-->
	
		<!--베스트폰-->
		<div class="best_model">
			<ul class="model_title">
				<li>
					<h3 class="">추천 베스트폰!</h3>
				</li>
				<li><a href="./mobile2_list.html">전체보기></a></li>
			</ul>

			<div class="model_wrap">
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m2.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m8.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m7.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G<span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m3.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
			</div>
		</div>

		<!--
<div class="s_banner bane3">
<a href="#"><div><img src="./img/banner1.jpg" alt="배너1"></div></a>
</div>
-->

		<!--잘나가는 인기폰-->
		<div class="hot_model">
			<ul class="model_title">
				<li>
					<h3 class="">잘나가는 인기폰!</h3>
				</li>
				<li><a href="./mobile2_list.html">전체보기></a></li>
			</ul>

			<div class="model_wrap">
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m4.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m5.png" alt=""><span><img src="./img/logo_5g.png" alt=""></span></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m6.png" alt=""></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
				<a href="#">
					<ul class="model_box">
						<li class="model_img"><img src="./img/m7.png" alt=""></li>
						<li class="model_name">스테이지 5G <span>(월) 33,500원</span></li>
					</ul>
				</a>
			</div>
		</div>

		<!--
<div class="delivery">
<a href=""><img src="./img/real1.jpg" alt=""></a>   
</div>
<div class="map">
<a href=""><img src="./img/real3.jpg" alt=""></a> 
</div>
-->



	</div>

	<!--    푸터영역-->
	<div class="footer" id="footer">
		<!--
<div class="foot_icon">
<ul>
<li><a href="#"><img src="./img/partner.gif" alt=""></a></li>
<li><a href="#"><img src="./img/imgIbkMark.gif" alt=""></a></li>
</ul>
</div>
-->
		<!--
<div class="footer_icon">
<ul>
<li><img src="./img/f1.jpg" alt=""></li>
<li><img src="./img/f2.jpg" alt=""></li>
<li><img src="./img/f3.jpg" alt=""></li>
<li><img src="./img/f4.jpg" alt=""></li>
</ul>
</div>
-->
		<div class="foot_text">
			<ul>
				<li>회사명 : 모바일스토어(KT스토어) </li>
				<li>대표 : 백서영</li>
				<li>사업자등록번호 : 569-01-00113</li>
				<li>통신판매업신고 : 제 2015-경기안산-0564호</li>
				<li>고객센터 : 1577-3269</li>
				<li>팩스번호 : 0502-777-2295</li>
				<li>주소 : 경기도 안산시 고잔로 102 대지스타타워 907호</li>
				<li>Copyright 2016 ktstore. All rights reserved.</li>
			</ul>
		</div>
		<!--    카톡, 전화-->
		<div class="fixed">
			<ul class="kakao">
				<li><a href="https://pf.kakao.com/_Hlixbxl"><img src="./img/kakao.png" alt=""></a></li>
			</ul>
			<ul class="tele_shop">
				<li><a href="http://15773269.iisweb.co.kr/teleshopping/"><img src="./img/teleshop.png" alt=""></a></li>
			</ul>
		</div>
	</div>
</div>
     
    <a id="MOVE_TOP_BTN" href="#">TOP</a>
    <div class="overlay"></div>

    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/index.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
	<script type="text/javascript">
        
        //메인슬라이드
        var swiper = new Swiper('.swiper1', {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
        
        
      //작은슬라이드  
   var swiper = new Swiper('.swiper2', {
      slidesPerView: 'auto',
      centeredSlides: false,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
        
		//사이드바
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
        
        
        //검색창
                $(document).ready(function() {
            $("#find_bar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#find_close, .overlay').on('click', function() {
                $('#find_bar').removeClass('active')
                $('.overlay').removeClass('active');
            });

            $('#find').on('click', function() {
                $('#find_bar').addClass('active')
                $('.collapse.in').toggleClass('in');
            });
        });
		
    </script>
    
</body>

</html>
