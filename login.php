<?php session_start(); #세션 시작.
# 1. 입력된 데이터 가져오기
$email = $_POST['email'];
$pwd = $_POST['pwd'];


# 2. photographer 데이터베이스 접속
include_once("dbconn.php");

# 3. select 질의문 작성
# 회원가입은 insert, 로그인은 select, 탈퇴(삭제)는 delet,  회원정보 수정은 update
$sql = "select * from user where email = '$email'and pwd ='$pwd'";

//echo $sql;

$result=$conn->query($sql);   //select 문 실행
echo $conn->error;
if($result->num_rows > 0){  //검색된 일치한 사용자가 1명일때
    $row = $result->fetch_assoc();  // 한 레코드를 빼오는거 result안에 있는 레코드를 가리키는 화살표를 cusser라고 함.
    echo "로그인이 완료되었습니다.<br>";
    echo "<a href='Home.php'>홈으로 이동</a>";
    // session 변수 생성 및 정보 기록. session:로그인 된 상태
    $_SESSION['uid']=$email;  //uid라는 세션 변수 만들고 거기에 내 이메일 넣음.
    $_SESSION['name']=$row['name'];

}
else{
    echo "로그인 아이디 혹은 비밀번호가 맞지 않습니다.<br>";
    echo "<a href='Login.html'>로그인 페이지로 이동<br></a>";
}
?>