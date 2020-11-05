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
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon&display=swap" rel="stylesheet">
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
        #titleImg{
            display: inline;
            width: 200px;
        }

        input[type=text], input[type=password], select, textarea {
        width: 80%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        margin-top: 10px;
    }
 
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: orange;
        color: white;
        width: 500px;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        margin-top: 15px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 10px;
    }

    input[type=submit]:hover {
        background-color: cornflowerblue;
    }

    .container {
        border-radius: 5px;
        background-color: #e8f5ff;
        padding: 20px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .container2 {
        border-radius: 5px;
        padding: 20px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    #h11{
        position: absolute;
        top: 1px;
        left: 20px;
        color: lightskyblue;
        }
    #h12{
        position: absolute;
        top: 45px;
        left: 20px;
        color: lightskyblue;
        }
    h1{ 
        color: #00A5FF;
        }

    .font{
            font-size: 25px;
            font-family: 'Do Hyeon', sans-serif;
     }
     .font2{
            font-size: 45px;
            text-align: center;
            color: salmon;
            font-family: 'Do Hyeon', sans-serif;
     }
    #aboutlogin{
            text-align: center;
            color: darkorange;
            direction: none;
        }
    #agree{
            width: 180px;
            padding: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            display: block;
            margin-left: auto;
            background-color: dimgray;
            color: white;
        }
    #agree:hover {
        background-color: cornflowerblue;
    }
        #hi{
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
  <!-- Top Navigation Menu -->

    <div class="w3-bar w3-white w3-card-4"><!--card 다음의 숫자는 바의 그림자 정도-->
        <img src="images/title.jpg" id="titleImg" class="w3-bar-item">
        <a href="Home.php"s class="w3-bar-item w3-button w3-padding-large"onMouseOver='this.innerHTML="홈"' onMouseOut='this.innerHTML="HOME"' >HOME</a>
        <a href="Portfolio.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="포트폴리오"' onMouseOut='this.innerHTML="PORTFOLIO"'>PORTFOLIO </a>
       
        <a href="Works.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="작업들"' onMouseOut='this.innerHTML="WORKS"'>WORKS</a>
         <div class="w3-dropdown-hover">
            <button class="w3-padding-large w3-button"onMouseOver='this.innerHTML="예약하기"' onMouseOut='this.innerHTML="CONTECT"'>CONTECT <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#portfolio')">포트폴리오</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#graph')">촬영경험</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#concept')">주요촬영컨셉들</a>
            </div>
        </div>
        <a href="aboutme.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="작가소개"' onMouseOut='this.innerHTML="ABOUT ME"'>ABOUT ME</a>
     <div class="w3-bar-item w3-padding-large">
         

        
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()"><i class="fa fa-bars"></i></a><!--반응형웹 메뉴 정리. 한곳에 몰아넣기/메뉴아이콘 세줄쫙쫙-->
    </div>
</div><br><br><br><br>
   
    
        
             <?php      
             if(!isset($_SESSION['uid'])) { ?>
            <h1 class="font2">촬영 예약은 로그인 하신 회원만 가능합니다.</h1>
     <div id="aboutlogin">
         <a href='Login.html' style="decoration:none" class="w3-text-blue">로그인페이지 이동</a></div>
             <?php } else { ?>
            <div id="hi">
           <strong class="w3-text-blue" ><?= $_SESSION['name'] ?></strong> 님 환영합니다.<br>
            * 매월 둘째주, 넷째주는 휴무입니다.
      </div>

      
        
    
    
    
 <div class="w3-content" style="max-width: 2000px;">
   <div class="container2" >
       <img src="icon/%EC%B4%AC%EC%98%81%EC%98%88%EC%95%BD.png" width="300px"  >
    </div>
        <div class="container " >
          <form action="contectproc.php" method="post">
 
            <div class="row">
              <div class="col-25">
                <label for="fname" class="font">예약자 명 : </label>
              </div>
              <div class="col-75">
                <input type="text" name="name" placeholder="예약자 성함을 입력해 주세요." required>
              </div>
            </div>
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">연락처 : </label>
              </div>
              <div class="col-75">
                <input type="text" name="tel" placeholder="-를 포함해서 입력해주세요." required>
              </div>
            </div>
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">촬영 희망일 : </label>
              </div><br>
              <div class="col-75">
                <input type="date" name="date" placeholder="희망 날짜를 입력해 주세요." required>
              </div>
            </div>
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">촬영 인원 : </label>
              </div><br>
              <div class="col-75">
                <input type="number" name="num" placeholder="입력해주세요" required>
              </div>
            </div>
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">컨셉 및 목적 : </label>
              </div>
              <div class="col-75">
                  <textarea rows="10" name="concept"  placeholder="내용을 입력해 주세요."></textarea>
              </div>
            </div>
              
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">패키지 선택</label>
              </div><br>
              <div class="col-75">
                <input type="radio" name="pacage" value="pacage1"> 개인 화보  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="radio" name="pacage"value="pacage2"> 웨딩 앨범 플라워  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="radio" name="pacage" value="pacage3"> 웨딩 앨범 정장  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="radio" name="pacage" value="pacage4"> 우정촬영 
              </div>
            </div>
              
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">비밀번호 설정</label>
              </div>
              <div class="col-75">
                <input type="text" name="pwd" placeholder="비밀번호를 설정해주세요" required>
              </div>
            </div>
              <div class="row">
              <div class="col-25">
                <label for="fname" class="font">개인정보처리 동의</label>
              </div>
              <div class="col-75"><br>
                동의합니다. <input type="checkbox" name="agree" required>
                  <a href="%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EB%B3%B4%ED%98%B8%EC%B2%98%EB%A6%AC%EB%B0%A9%EC%B9%A8.txt" download style="text-decoration:none"> <input type="button" value="개인정보처리방침 다운" name="agree" id="agree" value="1" required></a>
              </div>
            </div>

              <br><br>
              <div class= "row">
                <input type="submit" value="예약하기" class="font">
                </div>
            </form>
        </div> 
    </div><br><br><br><br><br>
    <?php } ?> 
    
    
    <div class="container2" >
        <img src="icon/%ED%81%90%EC%97%94%EC%97%90%EC%9D%B4.png" width="300px"  ><br>
        <h1 class="font">1.촬영 소품들이 준비되어 있나요?</h1>
        <p>&emsp;네. 기본적인 가발, 고데기, 안경 등 재미있개 촬영을 할 수 있는 소품들이 준비되어 있으며, 무료로 이용이 가능합니다.</p><br>
        <h1 class="font">2.사진 촬영 후 포토샵을 해주나요?</h1>
        <p>&emsp;네. 단 2회까지는 무료로 수정이 가능하며, 이후 추가적인 작업을 원하시는 경우에는 추가요금이 발생합니다.</p><br>
        <h1 class="font">3. 촬영 후 원본 파일을 받을 수 있나요?</h1>
        <p>&emsp;아니오. 기본적인 사진촬영 결과물들은 앨범이나 사진의 형태로 드리고 있습니다. 다만 원본 파일을 원하시는 경우 추가요금을 내신 후 이용이 가능하며, 이 경우 해당 파일의 상업적 이용이 가능합니다.</p>
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


















