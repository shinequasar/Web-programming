<?php
$server = "localhost";  # mysql서버가 어디있는지 치는거. 내꺼면 로컬호스트, 다른 컴의 서버에접속 하려면 그 컴의 ip주소쓰기
$user = "root";
$password = "";
$dbname = "photographer";
$conn = new mysqli($server,$user,$password,$dbname);
if($conn->connect_error){  #에러가 있나없나 체크
    die("photographer db 접속 오류");
}
//echo "photographer db 접속 성공"
?>