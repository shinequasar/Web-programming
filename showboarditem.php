<?php session_start() ?>
<!DOCTYPE html>

<html>

<head>
    <title>게시글확인</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }
    body {
        width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }
 
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }
 
    input[type=submit], button {
        background-color: coral;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
        margin-left: 10px;
        float: right;
    }

 
    input[type=submit], button :hover {
        background-color: coral;
    }
 
    .container {
        border-radius: 5px;
        background-color: orange;
        padding: 20px;
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
    </style>
    </head>
    <body>
        <?php
    if(!isset($_GET['no']))
        header("location:showboard.php");
    
        include_once('dbconn.php');
        $no = $_GET['no']; // 선택한 게시글 번호
        $sql = "select * from board where no = $no";
        $result = $conn->query($sql);
        if(!$result){ //검색오류가 있을때
            echo $conn->error;
            die("게시판 글 검색에 오류가 있습니다.");
            
        }
        $row = $result->fetch_assoc(); //한 건의 레코드 가져옴
        $email = $row['email'];
        $wdate = $row['wdate'];
        $title = $row['title'];
        $note  = $row['note'];
        ?>
        <h2>게시글 확인</h2>
        
        <p>사진작가와 나누고 싶은 이야기를 나눠보아요.</p>
        <hr>
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
                <input type="text" name="title" value="<?=$title?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-25">

                <label for="lname">게시글</label>
              </div>
              <div class="col-75">
                  <textarea rows="10" name="note" readonly><?=$note?></textarea>
              </div>
            </div>
            <div class="row">
                <?php
                    if($email ==$_SESSION['uid']){
                        $_SESSION['no'] = $no;
                ?>
                <button type="button" onclick="location.href='removeboard.php?no=<?=$no?>'">Remove</button>
              <input type="submit" value="Modify">
                <?php } ?>
                <button type="button" onclick="history.back()">List</button>
            </div>
          </form>
        </div>
    </body>
</html>
