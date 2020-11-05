<?php 
# 1. 입력양식에서 입력된 데이터 가져오기
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];


# 2. pizza 데이터베이스 접속
include_once("dbconn.php");

# 3. INSERT 명령어 작성
$sql = "insert into contect values('$email','$tel','$message')";
#echo $sql;

# 4. SQL의 INSERT 명령어 실행  //회원정보 입력
if($conn->query($sql) === TRUE){
    echo "메세지가 전달되었습니다.<br> '$email'로 연락드리겠습니다.<br>";   
    echo "<a href='aboutme.php'>작가소개 페이지 이동</a>";
}
else
    echo "등록 처리에 실패하였습니다.<br>".$conn->error;
?>