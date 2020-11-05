<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <title>포토그래퍼 페이지 만들기</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Jua|Merriweather|Noto+Serif+KR&display=swap" rel="stylesheet">
  <link rel="icon" href="camera.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <style>
    @import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
    body {
      font-family: 'Noto Sans KR', sans-serif;
    }

    .carousel-inner img {
        /*filter: grayscale(90%);  make all photos black and white */ 
        height: 100%; /* Set width to 100% */
        margin: auto;
    }

    @media (max-width: 600px) {
        .carousel-caption {
            display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
        }
    }
      
        .btn{
                padding: inherit;
                margin: auto;
                color: #fff;
                text-align: center;
                text-decoration: none; /*하이퍼링크 밑줄 없애기*/
                display: inline-block; /*블록 엘리먼트로 변경- 블록의 특성을 가지고 다른 블록과 한줄에 나타내는기능(블록으로 해야 버튼 크기 조절가능)*/
                width: 150px;
                font-size: 22px;
                color: orange;
                text-shadow:1.5px 1.5px 0 black;
                font-family: 'Merriweather', serif;
            }
            .btn:hover{
                background-color:rgba(255,255,255,0.5);
                color: dimgray;
                font-family: 'Noto Serif KR', serif;
                font-size: 20px;
            }
            #ghost{
                position: absolute;
                padding-top: 3px;
                padding-bottom: 3px;
                top: 55%;
                left: 50%;
                width: 800px;
                transform: translate(-50%,-50%);/*가운데로 오는거*/
                z-index: 2;
                text-align: center;
            }
      
     .slogan{
      padding-left: 80px;
      padding-right: 80px;
      padding-top: 40px;
      padding-bottom: 40px;
      color: white;
      text-align: center;
      background-color: rgba(255,255,255,0.7);/*네번째 숫자는 투명도*/
      /*어떤 영역을 화면의 가운데로 오게하고 싶으면 밑의 네줄써주기*/
      position: absolute;
      top: 35%;
      left: 50%; 
      transform: translate(-50%,-50%);/*가운데 사각형이 가운데로 오는거*/
      z-index: 1; 
         
      }
      
      h1{
          font-family: 'Merriweather', serif;
          color: orange;
          text-shadow:1px 1px 0 #444;
          font-size: 40px;
      }
      
      h3, p{
          font-family: 'Merriweather', serif;
          color: #444444;
      }
      .glyphicon glyphicon-chevron-right{
          position: absolute;
          top: 35%;
      }
      .login{
                padding: inherit;
                margin: auto;
                color: #fff;
                text-align: center;
                text-decoration: none; /*하이퍼링크 밑줄 없애기*/
                display: inline-block; /*블록 엘리먼트로 변경- 블록의 특성을 가지고 다른 블록과 한줄에 나타내는기능(블록으로 해야 버튼 크기 조절가능)*/
                width: 150px;
                font-size: 23px;
                color: orange;
                text-shadow:1px 1px 0 black;
                border-radius: 10px;
                background-color: white;
                box-shadow: 2px 2px 0 gray;
                font-family: 'Noto Sans KR', sans-serif;
      }
        .login2{
                padding: inherit;
                margin: auto;
                color: #fff;
                text-align: center;
                text-decoration: none; /*하이퍼링크 밑줄 없애기*/
                display: inline-block; /*블록 엘리먼트로 변경- 블록의 특성을 가지고 다른 블록과 한줄에 나타내는기능(블록으로 해야 버튼 크기 조절가능)*/
                width: 250px;
                font-size: 20px;
                color: orange;
                text-shadow:1px 1px 0 black;
                border-radius: 10px;
                background-color: white;
                box-shadow: 2px 2px 0 gray;
                font-family: 'Noto Sans KR', sans-serif;
      }
      .login:hover{
                background-color: orange;
                text-decoration: none; /*하이퍼링크 밑줄 없애기*/
                color: #ffffcc;
                border-radius: 10px;
                text-shadow:1px 1px 0 #663333;
                font-family: 'Noto Serif KR', serif;
                text-decoration: none; /*하이퍼링크 밑줄 없애기*/
            }
      #login{
                position: absolute;
                padding-top: 3px;
                padding-bottom: 3px;
                top: 65%;
                left: 50%;
                width: 800px;
                transform: translate(-50%,-50%);/*가운데로 오는거*/
                z-index: 2;
                text-align: center;
                text-decoration: none; /*하이퍼링크 밑줄 없애기*/
      }

      
  </style>
</head>
<body>

<!-- slogan -->
    <div class="slogan">
        <h3>Photographer</h3>
        <h1>JUNG JU YEON</h1>
        <hr>
        <p>Where there's will, there's a way</p>
    </div>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <!--indicator-->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" ></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
    </ol>
    
    <!-- Menu -->
<div id = "ghost" >
    <a href="#" class="btn" onMouseOver='this.innerHTML="홈"' onMouseOut='this.innerHTML="HOME"'>HOME</a>
    <a href="Portfolio.php" class="btn" onMouseOver='this.innerHTML="포트폴리오"' onMouseOut='this.innerHTML="PORTFOLIO"'>PORTFOLIO</a>
    <a href="Works.php" class="btn" onMouseOver='this.innerHTML="작업물들"' onMouseOut='this.innerHTML="WORKS"'>WORKS</a>
    <a href="contect.php" class="btn" onMouseOver='this.innerHTML="예약하기"' onMouseOut='this.innerHTML="RESERVATION"' class="black">RESERVATION</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; 
    <a href="aboutme.php" class="btn" onMouseOver='this.innerHTML="작가소개"' onMouseOut='this.innerHTML="ABOUT ME"' class="black">ABOUT ME</a>
</div>
    
<div id="login">
     <?php
    include_once('dbconn.php');
    if(!isset($_SESSION['uid'])) { ?>
    <a href="Login.html" class="login" onMouseOver='this.innerHTML="로그인"' onMouseOut='this.innerHTML="LOGIN"'><strong>LOGIN</strong></a>
     <?php } else { ?>
    <div class="login2"><strong><?= $_SESSION['name'] ?>님 환영합니다.</strong></div><br><br>
     <a href="logout.php" class="login" onMouseOver='this.innerHTML="로그아웃"' onMouseOut='this.innerHTML="LOGOUT"'><strong>LOGOUT</strong></a>
    <?php } ?>
</div>
    
    <!--slide-->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/1.JPG">
            <div class="carousel-caption">
            </div>
        </div>
         <div class="item">
            <img src="images/1-2.JPG">
            <div class="carousel-caption">
            </div>
        </div>
         <div class="item">
            <img src="images/1-3.JPG">
            <div class="carousel-caption">
            </div>
        </div>
    </div>
    
    <!--left and right controls-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="prev">

        <span class="sr-only">Next</span>
    </a>
</div>




    


<script>//제이쿼리 코드들
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50}); //메뉴에 각 섹션에 맞게 밝아지는 기능

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

</body>
</html>
