<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <title>작가소개 페이지</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="camera.ico"><!--맨위상단 홈페이지 아이콘-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/modernizr.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Do+Hyeon&display=swap" rel="stylesheet">
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
        #titleImg{
            display: inline;
            width: 200px;
        }
    * {
        box-sizing: border-box;
    }
    input[type=text], input[type=password], select, textarea {
        width: 100%;
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

    input[type=submit],button {
        background-color: coral;
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

    input[type=submit]:hover,button:hover  {
        background-color: cornflowerblue;
    }

    .container {
        border-radius: 5px;
        background-color: #ffc;
        padding: 20px;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .container3 {
        border-radius: 5px;
        background-color: #ff9933;
        padding: 20px;
        width: 50%;
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

    .font{
            font-size: 22px;
            font-family: 'Do Hyeon', sans-serif;
     }
    .container2 {
        border-radius: 5px;
        padding: 20px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        margin-top: 50px;
    }
        
        
        
        
        
        
        
         #pizza {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
            #pizza td, #pizza th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #pizza tr:nth-child(even){background-color: #f2f2f2;}
            #pizza tr:hover {background-color: #ddd;}
            #pizza th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: orange;
                color: white;
            }
        #pizza img {
            width: 120px;
            height: 80px;
        }
        .btn {
            background-color: orange;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 70%;
            opacity: 0.9;
            margin-top: 10px;
        }
        .btn:hover {
            opacity: 1;
        }
           /* Style Page */
            .paging_area { 
                width: 100%;
                height: 50px;
                padding-top: 7px;
                margin-left: auto;
            }
            .paging_area a, .paging_area span {
                /*
                color: black;
                display: inline-block;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;*/
                display: inline-block;
                border-radius: 3px;
                border: solid 1px #c0c0c0;
                background: #e9e9e9;
                box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
                padding: 3px 9px;
                font-weight: bold;
                text-decoration: none;
                color: #717171;
                text-shadow: 0px 1px 0px rgba(255,255,255, 1);
            }
            .paging_area a.active {
                background-color: dodgerblue;
                color: white;
            }
            .paging_area a:hover:not(.active) {background-color: #fefefe;}
            /* Search */
            .topnav .search-container {
              float: right;
            }
            .topnav input[type=text] {
              padding: 6px;
              margin-top: 8px;
              font-size: 17px;
              border: 3px solid #ddd;
                margin-right: 6px; 
                margin-bottom: 10px;
            }
            .topnav .search-container button {
              float: right;
              padding: 6px 10px;
              margin-top: 8px;
              margin-right: 16px;
              background: #ddd;
              font-size: 17px;
              border: none;
              cursor: pointer;
            }
            .topnav .search-container button:hover {
              background: #ccc;
            }
        
        
        
        
    </style>
</head>
<body>
  <!-- Top Navigation Menu -->
<div class="w3-top" style="z-index: 5">
    <div class="w3-bar w3-white w3-card-4"><!--card 다음의 숫자는 바의 그림자 정도-->
        <img src="images/title.jpg" id="titleImg" class="w3-bar-item">
        <a href="Home.php"s class="w3-bar-item w3-button w3-padding-large"onMouseOver='this.innerHTML="홈"' onMouseOut='this.innerHTML="HOME"' >HOME</a>
        <a href="Portfolio.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="포트폴리오"' onMouseOut='this.innerHTML="PORTFOLIO"'>PORTFOLIO </a>
       
        <a href="Works.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="작업들"' onMouseOut='this.innerHTML="WORKS"'>WORKS</a>
        <a href="aboutme.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"onMouseOver='this.innerHTML="예약하기"' onMouseOut='this.innerHTML="CONTECT"'>CONTECT</a>
                 <div class="w3-dropdown-hover">
            <button class="w3-bar-item w3-button w3-padding-large w3-hide-small" onMouseOver='this.innerHTML="작가소개"' onMouseOut='this.innerHTML="ABOUT ME"'>ABOUT ME<i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#portfolio')">포트폴리오</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#graph')">촬영경험</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="scrollToSection('#concept')">주요촬영컨셉들</a>
            </div>
        </div>
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
</div><br><br>


    <div class="container2">
    <img src="icon/%EC%9E%91%EA%B0%80%EC%86%8C%EA%B0%9C.png" width="300px"><br>
        <img src="images/ddd.png">
    </div>
    
    
    <div class="container3 font" >
        <p> >> 정주연(Jung ju Yeon)</p>
        <p> >> 경력 : 14년차 (2034 기준)</p>
        <p> >> 주소 : 어쩌구시 저쩌구동 어떤 사무실 300-23</p>
        <p> >> 연락처 : 010-1112-2222</p>
        <p> >> 이메일 : shinequasar@naver.com</p>
    </div><br><br><br>
    
     <div class="container2">
         <img src="icon/%EC%BB%A8%ED%85%8D.png" width="300px"><br><br>
    </div>
    
    
            <div class="container">

          <form action="message.php" method="post">
            <div class="row">
              <div class="col-25">
                <label for="fname" class="font">이메일</label>
              </div>

              <div class="col-75">
                <input type="text" name="email" placeholder="이메일을 입력해주세요." required>
              </div>

            </div>


            <div class="row">
              <div class="col-25">
                <label for="lname" class="font">연락처</label>
            </div>
              <div class="col-75">
                <input type="text" name="tel" placeholder="-를 넣어서 입력해주세요." required>
              </div>
              </div><br>
              
              <div class="row">
              <div class="col-25">
                <label for="lname" class="font">메세지</label>
            </div>
              <div class="col-75">
                <textarea rows="10" name="message"  placeholder="내용을 입력해 주세요."></textarea>
              </div><br><br><br>
              </div><br>
              
   
              <div class= "row">
                <input type="submit" value="메세지보내기" class="font">
                </div>
            </form>  
 

        </div><br><br><br><br>
    
    
    
    
    
    
    
      <div class="container2 font">
         <img src="icon/%EA%B2%8C%EC%8B%9C%ED%8C%90.png" width="300px"><br><br>
          <button type="button" onclick="location.href='writeboard.php'">게시글 작성</button>
    </div> 
    
    
    
    
     <div class="container2">

    <?php
        if(isset($_GET['keyword']) && !strpos($_GET['keyword'], "%") === false) {
            $keyword = $_GET['keyword'];
            $keyword = '%'.$keyword.'%';
        }
        else if(!isset($_GET['keyword'])) $keyword = '%';
        else $keyword = $_GET['keyword'];
          
        if(!isset($_SESSION['uid'])){
          header("location: signin.html");
         }
        $email = $_SESSION['uid'];
        include_once('dbconn.php');
          //페이징을 위한 변수 선언과 값 설정
          $list_size = 6; //한 페이지의 레코드 개수
          $more_page = 3; //현재 페이지 이전과 이후에 나올 페이지 수
          $page = 0; // 현재 페이지 번호
          $page = (isset($_GET['page']))? intval($_GET['page']) : 1; //선택한 번호가 있으면 그거, 아니면 1 가져오기.
          $sql = "select count(*) cnt from board";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          $rowcnt = $row['cnt']; //게시판에 있는 전체 레코드 개수
          $page_count = (int)($rowcnt / $list_size); //페이지 개수
          if($rowcnt % $list_size > 0) $page_count++;
          //현재 페이지 이전에 나올 페이지들의 시작 번호
          $start_page = max($page - $more_page, 1); 
          $end_page = min($page + $more_page, $page_count);
          $offset = ($page - 1) * $list_size; //건너갈 레코드 개수
          
        $sql = "select board.*, name from board, user where board.email = user.email and title like '$keyword' order by no desc limit $offset, $list_size";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
    ?>
        <table id='pizza'>
        <tr>
            <th>번호</th>
            <th>작성자</th>
            <th>작성일자</th>
            <th>제목</th>
        </tr>
        <?php
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><a href="showboarditem.php?no=<?=$row['no']?>"><?=$row['no']?></a></td>
            <td><?=$row['name']?></td>
            <td><?=$row['wdate']?></td>
            <td><?=$row['title']?></td>
        </tr>
        <?php } ?>
        </table>
    <div class="paging_area">
        <?php
            //현재 페이지 이전으로 가도록 PREV 링크 생성
            if($page > 1){
        ?>
        <a href="showboard.php?page=<?=($page - 1)?>&keyword=<?=$keyword?>">PREV</a>
    
    <?php } else{ ?>
    <span>PREV</span>
    <?php } ?>
    <?php
        //현재 페이지를 중심으로 이전 이후에 페이지 번호 나열하기
    for($p=$start_page; $p<=$end_page;$p++){
        if($p == $page)
            echo "<a class ='active' hfef='#'>$p</a>";
        else{
        ?>
    <a href="showboard.php?page=<?=$p?>&keyword=<?=$keyword?>"><?=$p?></a>
        <?php }} ?> 
        <?php
            //현재 페이지 다음에 NEXT를 표시하기
        if($page < $end_page) { ?>
        <a href="showboard.php?page=<?=($page + 1)?>&keyword=<?=$keyword?>">NEXT</a>
        <?php } else { ?>
        <span>NEXT</span>
        <?php } ?>
        
    </div>
    
        <?php
        }
        else {
            echo "등록된 게시글이 없습니다.";
        }
        ?>
    
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


















