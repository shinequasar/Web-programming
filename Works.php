<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <title>워크 페이지</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="camera.ico"><!--맨위상단 홈페이지 아이콘-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/modernizr.min.js"></script>
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
        #titleImg{
            display: inline;
            width: 200px;
        }

            /* 커서 올려두면 사진확대 */
            .scale {
                  transform: scale(1);
                  transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
                }
            .scale:hover {
              transform: scale(1.4);
              z-index: 3;  /* 배치 순서를 결정. 숫자가 높을 수록 맨앞으로 나오게 해주는 역할!*/
            }
        .flex{
                display: flex;
                flex-wrap: wrap; /*화면 벗어나는 그림 다음줄로 내리기*/
            }
        /* gallery styles */
            .content{color:#777;font:13px/1.4 "helvetica neue",arial,sans-serif;width:720px;margin:20px auto;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px}
    </style>
</head>
<body>
  <!-- Top Navigation Menu -->
<div class="w3-top" style="z-index: 5">
    <div class="w3-bar w3-white w3-card-4"><!--card 다음의 숫자는 바의 그림자 정도-->
        <img src="images/title.jpg" id="titleImg" class="w3-bar-item">
        <a href="Home.php"s class="w3-bar-item w3-button w3-padding-large"onMouseOver='this.innerHTML="홈"' onMouseOut='this.innerHTML="HOME"' >HOME</a>
        <a href="Portfolio.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="포트폴리오"' onMouseOut='this.innerHTML="PORTFOLIO"'>PORTFOLIO </a>
        <div class="w3-dropdown-hover">
            <button class="w3-padding-large w3-button"onMouseOver='this.innerHTML="작업들"' onMouseOut='this.innerHTML="WORKS"'>WORKS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#portfolio')">포트폴리오</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#graph')">촬영경험</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#concept')">주요촬영컨셉들</a>
            </div>
        </div>
        <a href="contect.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="예약하기"' onMouseOut='this.innerHTML="CONTECT"'>CONTECT</a>
        <a href="aboutme.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="작가소개"' onMouseOut='this.innerHTML="ABOUT ME"'>ABOUT ME</a>
     <div class="w3-bar-item w3-padding-large">
         <?php      
         if(!isset($_SESSION['uid'])) { ?>
       <a href='Login.html' style="decoration:none" class="w3-text-orange">로그인페이지 이동</a>
         <?php } else { ?>
       <strong class="w3-text-orange"><?= $_SESSION['name'] ?></strong> 님 환영합니다.
        <?php } ?>
        </div>
        
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()"><i class="fa fa-bars"></i></a><!--반응형웹 메뉴 정리. 한곳에 몰아넣기/메뉴아이콘 세줄쫙쫙-->
    </div>
</div>

<div class="w3-content" style="max-width: 2000px; margin-top: 46px" id="home">
   
    

<!-- The gallery Section -->
<div id="portfolio" class="w3-container w3-content w3-padding-64" style="width: 800px">
   <div class="content">
        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->
       <img src="icon/%EC%8B%AC%EC%82%AC%EC%9D%B4%EB%A0%A5.png" width="300px"><br>
       <p class="w3-text-gray">왼쪽 상단의 i를 누르시면 상세 설명이 나옵니다.</p><br>
        <div id="galleria">
            <a href="images/18.JPG">
                <img 
                    src="images/18.JPG",
                    data-big="images/18.JPG"
                    data-title="이층 버스를 타고"
                     data-description="홍콩에서의 박물관 특별 전시전 심사위원 참가">
            </a>
            <a href="images/17.JPG">
                <img 
                    src="images/17.JPG",
                    data-big="images/17.JPG"
                    data-title="홍콩박물관에서"
                    data-description="또 다녀오고 싶은 그 곳">
            </a>
            <a href="images/16.jpg">
                <img src="images/16.jpg",
                    data-big="images/16.jpg"
                    data-title="하늘을 바라보며"
                     data-description="동대문 개인 전시전 출품작"
                >
            </a>
            <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/800px-Interior_convento_3.jpg">
                <img 
                    src="http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/120px-Interior_convento_3.jpg",
                    data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/1400px-Interior_convento_3.jpg"
                    data-title="그 길의 끝은 어디일까"
                    data-description="고즈넉한 성당의 복도를 촬영한 성당 특별전 참여."
                >
            </a>
            <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/800px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg">
                <img 
                    src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/100px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg",
                    data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/1280px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg"
                    data-title="거울과 하늘의 차이"
                    data-description="자연생태 관찰 사진전 특별 심사위원 자격 참가"
                >
            </a>
            <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/800px-Hazy_blue_hour_in_Grand_Canyon.JPG">
                <img 
                    src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/100px-Hazy_blue_hour_in_Grand_Canyon.JPG",
                    data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/1280px-Hazy_blue_hour_in_Grand_Canyon.JPG"
                    data-title="푸름과 어둠 사이"
                    data-description="울람부쿠르 지역 대통령배 자연경관 촬영대회 금상"
                >
            </a>
            <a href="images/15.jpg">
                <img 
                    src="images/15.jpg",
                    data-big="images/15.jpg"
                    data-title="입구로 가는 길"
                     data-description="마카오 장관 배 카지노 촬영대회 은상">
            </a>
            <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/800px-Bohinjsko_jezero_2.jpg">
                <img 
                    src="http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/100px-Bohinjsko_jezero_2.jpg",
                    data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/1280px-Bohinjsko_jezero_2.jpg"
                    data-title="나는 그래도 사과나무를"
                    data-description="수강생 입상 작품 심사작 중 하나"
                >
            </a>
            <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/800px-Bowling_Balls_Beach_2_edit.jpg">
                <img 
                    src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg",
                    data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/1280px-Bowling_Balls_Beach_2_edit.jpg"
                    data-title="전복과 해삼은 어디에"
                    data-description="미국 해녀마을 전복,해삼 챌린지 전속 포토그래퍼"
                >
            </a>
            <a href="https://www.youtube.com/watch?v=U8RsrptE_Sc">
                <span class="video" data-title="생애 첫 컴퓨터 조립과정"
                    data-description="컴퓨터공학과 정소연 학생이 컴퓨터시스템 기초실습에서 생애 처음으로 컴퓨터를 조립하는 모습을 영상으로 담았다.">생애 첫 컴퓨터 조립과정</span>
            </a>
            <a href="https://www.youtube.com/watch?v=w5qeTp6YN44">
                <span class="video" data-title="하드디스크 분해 및 조립과정"
                    data-description="컴퓨터공학과 정소연 학생이 컴퓨터시스템 기초실습에서 하드디스크를 조립하는 모습을 영상으로 담았다.">하드디스크 분해 및 조립과정</span>
            </a>

        </div>
    </div><br><br><br>
    
    
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
    
     <!--gellary-->
    <img src="icon/%ED%94%84%EB%A1%9C%EC%A0%9D%ED%8A%B8.png" width="300px"><br><br>

      <div class="w3-third">
        <img src="/images/14.jpg" style="width:100%" onclick="onClick(this)">
        <img src="/images/a.png" style="width:100%">
        <img src="/images/b.jpg" style="width:100%">
        <img src="/images/KakaoTalk_20190622_203009576.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_01.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_02.jpg" style="width:100%"onclick="onClick(this)">
      </div>

      <div class="w3-third">
        <img src="/images/KakaoTalk_20190622_203009576_03.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_04.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_05.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_06.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_07.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_08.jpg" style="width:100%"onclick="onClick(this)">
      </div>

      <div class="w3-third">
        <img src="/images/KakaoTalk_20190622_203009576_12.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_10.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_11.jpg" style="width:100%"onclick="onClick(this)">
        <img src="/images/KakaoTalk_20190622_203009576_12.jpg" style="width:100%"onclick="onClick(this)">
      </div>
    </div>
    
</div>
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-gray w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity" style="cursor: pointer;"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="cursor: pointer;"></i>
    <i class="fa fa-twitter w3-hover-opacity" style="cursor: pointer;"></i>
    <p class="w3-medium">Jung Ju Yeon STUDIO</p>
</footer>    
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// 화면을 부드럽게 스크롤링하기
function scrollToSection(loc) {
    var offset = $(loc).offset();
    $('html, body').animate({scrollTop: offset.top}, 500);
}
    
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
     <!-- load jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <!-- load Galleria -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js"></script>
    <script>
        $(function() {
            Galleria.run('#galleria');
        });
    </script>
    <script src="js/classie.js"></script>
		<script src="js/photostack.js"></script>
		<script>
			// [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
			
			new Photostack( document.getElementById( 'photostack-1' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
			new Photostack( document.getElementById( 'photostack-2' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
			new Photostack( document.getElementById( 'photostack-3' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
  
            // Modal Image Gallery
            function onClick(element) {
              document.getElementById("img01").src = element.src;
              document.getElementById("modal01").style.display = "block";
              var captionText = document.getElementById("caption");
              captionText.innerHTML = element.alt;
            }
            // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
                                </script>
</body>
</html>


















