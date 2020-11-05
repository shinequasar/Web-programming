<?php
# 1. 입력양식에서 입력된 데이터 가져오기
$email = $_POST['email'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$tel = $_POST['tel'];
$agree = $_POST['agree'];

/*
echo "$email<br>";
echo "$name<br>";
echo "$pwd<br>";
echo "$tel<br>";
*/

# 2. pizza 데이터베이스 접속
include_once("dbconn.php");

# 3. INSERT 명령어 작성
$sql = "insert into user values('$email','$name','$pwd','$tel','$agree')";
#echo $sql;

# 4. SQL의 INSERT 명령어 실행  //회원정보 입력
if($conn->query($sql) === TRUE){
    echo "$name 회원의 회원가입이 성공하였습니다.<br>";
    echo "<a href='Login.html'>로그인페이지 이동</a>";
}
else
    echo "회원가입 처리에 실패하였습니다.<br>".$conn->error;
?>