<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <title>포트폴리오 페이지</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="camera.ico"><!--맨위상단 홈페이지 아이콘-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
        #titleImg{
            display: inline;
            width: 200px;
        }
            .flex:hover{ /*마우스 올려두면 기울어지는거*/
                transform: rotate(3deg);
            }

    </style>
</head>
<body>
    
  <!-- Top Navigation Menu -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card-4"><!--card 다음의 숫자는 바의 그림자 정도-->
        <img src="images/title.jpg" id="titleImg" class="w3-bar-item">
        <a href="Home.php"s class="w3-bar-item w3-button w3-padding-large" onMouseOver='this.innerHTML="홈"' onMouseOut='this.innerHTML="HOME"' >HOME</a>
        <div class="w3-dropdown-hover">
            <button class="w3-padding-large w3-button" onMouseOver='this.innerHTML="포트폴리오"' onMouseOut='this.innerHTML="PORTFOLIO"' >PORTFOLIO <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#portfolio')">포트폴리오</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#graph')">촬영경험</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#concept')">주요촬영컨셉들</a>
            </div>
        </div>
        <a href="Works.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" onMouseOver='this.innerHTML="작업들"' onMouseOut='this.innerHTML="WORKS"'>WORKS</a>
        <a href="contect.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"  onMouseOver='this.innerHTML="예약하기"' onMouseOut='this.innerHTML="CONTECT"'>CONTECT</a>
        <a href="aboutme.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" onMouseOver='this.innerHTML="작가소개"' onMouseOut='this.innerHTML="ABOUT ME"'>ABOUT ME</a>
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
   
    

<!-- The Band Section -->
<div id="portfolio" class="w3-container w3-content w3-padding-64" style="width: 800px">
    <img src="icon/%ED%8F%AC%ED%8A%B8%ED%8F%B4%EB%A6%AC%EC%98%A4.jpg" width="300">
    <p class="w3-opacity"><i>2019. 1. 1  ~  2022. 8. 1</i></p>
  <div style="float: left">
    <table>
        <ul>
            <li><strong>2019. 2. 11 / 현대 미술박물관 개인전 전시</strong></li>
            <li>2019. 7. 3 / 동대문 DDP 연합 전시</li>
            <li>2019. 8. 15 / Provence, Montpellier 지역 축제 촬영 </li>
            <li><strong>2020. 6. 15 / San Francisco 전시 수상</strong></li>
            <li>2020. 8. 15 / 미국 LA Nikon사와 콜라보 촬영</li>
            <li>2021. 2. 15 / 소니 컴백파티 초청</li>
            <li>2021. 5. 21 / San Francisco 전시 수상</li>
            <li>2021. 9. 18 / 동대문 DDP 연합 전시</li>
            <li>2022. 7. 15 / 소니 컴백파티 초청</li>
        </ul>
      </table>
    </div>
    
    
    <div style="float: left">
        &emsp;&emsp;&emsp;&emsp;<img src="images/6.JPG" width="300" onclick="onClick(this)" class="w3-round flex" style="cursor: pointer;"><br><br><br>
    </div>
    <div class="w3-row-padding w3-center w3-padding-32 w3-text-orange">
        <div class="w3-third" style="cursor: pointer;">
            <p><strong>▼ 동대문 DDP 메인 전시</strong></p>
            <img src="images/2.JPG" class="w3-round w3-margin-bottom flex" style="width: 60%" onclick="onClick(this)" alt="동대분 DDP 메인전시" >
        </div>
        <div class="w3-third" style="cursor: pointer;">
            <p><strong>▼ San Francisco 전시</strong></p>
            <img src="images/4.JPG" class="w3-round w3-margin-bottom flex" style="width: 90%" onclick="onClick(this)" alt="San Francisco 전시" >
        </div>
        <div class="w3-third" style="cursor: pointer;">
            <p><strong>▼ 미국 LA Nikon사와 콜라보 촬영</strong></p>
            <img src="images/5.JPG" class="w3-round w3-margin-bottom flex" style="width: 90%" onclick="onClick(this)" alt="미국 LA Nikon사와 콜라보 촬영">
        </div>
    </div>
</div>

</div>
    
<!-- Tour Content -->
<div class="w3-orange" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width: 800px" id="graph">
        <img src="icon/%EC%B4%AC%EC%98%81%EA%B2%BD%ED%97%98.png" width="300"><br>
        
          <p class="w3-wide"><i class="fa fa-camera"></i> 포토샵 편집</p>
          <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-brown w3-center" style="width:50%">50%</div>
          </div>
          <p class="w3-wide"><i class="fa fa-photo"></i> 인물사진 촬영</p>
          <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-yellow  w3-center" style="width:90%">90%</div>
          </div>
          <p class="w3-wide"><i class="fa fa-laptop"></i>낮설게 보이게 하기</p>
          <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-brown  w3-center" style="width:75%">75%</div>
          </div><br><p class=" w3-text-white w3-center"><i class="fa fa-"></i> - It's developing -</p>
        </div>
    </div>


  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
    
    
<!-- Gallery Section -->    
<div class="w3-container w3-content w3-padding-64 w3-light-gray" style="max-width: 800px" id="concept">
    <img src="icon/%EC%A3%BC%EC%9A%94%EC%B4%AC%EC%98%81.png" width="300"><br><br>
    
<!-- Photo grid -->
 <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom" style="cursor: pointer;">
      <img src="images/1.jpg" alt="경계의 저편" style="width:100%" class="w3-hover-opacity" onclick="onClick(this)">
      <div class="w3-container w3-white">
        <p><b>경계의 저편</b></p>
        <p>색의 대비가 인상적이고 그 위를 덮는 빛과 그림자가 그 대비를 더욱 부각 시킨다. 단순한 선과 면의 조합이 보는 사람들로 하여금 다시한번 돌아보게 하는 힘이 있다.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom" style="cursor: pointer;">
      <img src="images/12.JPG" alt="점, 선, 면" style="width:100%" class="w3-hover-opacity" onclick="onClick(this)">
      <div class="w3-container w3-white">
        <p><b>점, 선, 면</b></p>
        <p>가장 단순함에서 아름다움을 찾는 프로젝트. 사물을 나타내는 가장 간단한 표현인 점과 선, 그리고 면을 통하여 주변을 관찰하고 사진으로 담아내는 전시.</p>
      </div>
    </div>
    <div class="w3-third w3-container" style="cursor: pointer;">
      <img src="images/5.JPG" alt="일상을 낯설게" style="width:100%" class="w3-hover-opacity" onclick="onClick(this)">
      <div class="w3-container w3-white">
        <p><b>일상을 낯설게</b></p>
        <p>매일 보는 계단, 엘리베이터, 창문, 심지어 가방 속까지 너무 일상적이기 때문에 보지 못하는 모습들을 사진으로 담아내는 프로젝트. 개인의 일상을 이해하는 한발자국.</p>
      </div>
    </div>
  </div>
 <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom" style="cursor: pointer;">
      <img src="images/1.jpg" alt="Beyond the border" style="width:100%" class="w3-hover-opacity" onclick="onClick(this)">
      <div class="w3-container w3-white">
        <p><b>Beyond the border</b></p>
        <p>The contrast of colors is impressive, and the light and shadows that cover them highlight the contrast even more. A simple combination of lines and faces gives viewers the power to look around again.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom" style="cursor: pointer;">
      <img src="images/12.JPG" alt="Points, Lines, Faces" style="width:100%" class="w3-hover-opacity" onclick="onClick(this)">
      <div class="w3-container w3-white">
        <p><b>Points, Lines, Faces</b></p>
        <p>A project to find beauty in the simplest. An exhibition of observation and photographs of the surroundings through dots, lines, and faces, the simplest expression of things.</p>
      </div>
    </div>
    <div class="w3-third w3-container" style="cursor: pointer;">
      <img src="images/5.JPG" alt="Out of the ordinary" style="width:100%" class="w3-hover-opacity" onclick="onClick(this)">
      <div class="w3-container w3-white">
        <p><b>Out of the ordinary</b></p>
        <p>A project to take pictures of stairs, elevators, windows, and even bags you see every day because they are too common. a step in the understanding of one's daily life</p>
      </div>
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
    
</body>
</html>


















