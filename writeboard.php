
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>게시판</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="board.css">

    </head>

    <body>
        <?php
        if(isset($_SESSION['uid']))
            $email = $_SESSION['uid'];
        else // 로그인상태가 아니면
            header("location: signin.html"); // 로그인페이지로 이동하기
        $wdate = date('Y/m/d');
        ?>

        <div id="newboard" class="tabcontent">
        <h2>게시글 작성</h2>
        <p>사진작가와 나누고 싶은 이야기를 적어주세요.</p>
        <div class="divider"></div>
        <div class="container">
          <form action="writeboardproc.php" method="post">
            <div class="row">
              <div class="col-25">
                <label for="fname">작성자</label>
              </div>
              <div class="col-75">
                <input type="text" name="email" value="<?=$email?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">작성일</label>
              </div>
              <div class="col-75">
                <input type="text" name="wdate" value="<?=$wdate?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">제목</label>
              </div>
              <div class="col-75">
                <input type="text" name="title" placeholder="Title..">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">게시글</label>
              </div>
              <div class="col-75">
                <textarea rows="10" name="note"></textarea>
              </div>
            </div>
            <div class="row">
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
        </div>
        
        <div id="showboard" class="tabcontent">
            <iframe src="showboard.php" style="width:100%; height:100%; border:none"></iframe>
        </div>
        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>

















