<?php
# 1. 입력양식에서 입력된 데이터 가져오기
$name = $_POST['name'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$num = $_POST['num'];
$concept = $_POST['concept'];
$pacage = $_POST['pacage'];
$pwd = $_POST['pwd'];
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
$sql = "insert into reservation values('$name','$tel','$date','$num','$concept','$pacage','$pwd','$agree')";
#echo $sql;

# 4. SQL의 INSERT 명령어 실행  //회원정보 입력
if($conn->query($sql) === TRUE){
    echo "$name 님의 예약이 등록되었습니다.<br>";
    if($pacage == 'pacage1'){
        echo "등록하신 패키지는 '개인화보 패키지' 입니다.<br>";
    }
    elseif($pacage == 'pacage2'){
        echo "등록하신 패키지는 '웨딩 앨범 플라워 패키지' 입니다.<br>";
    }
    elseif($pacage == 'pacage3'){
        echo "등록하신 패키지는 '웨딩 앨범 정장 패키지' 입니다.<br>";
    }
    elseif($pacage == 'pacage4'){
        echo "등록하신 패키지는 '우정촬영 패키지' 입니다.<br>";
    }
    
    echo "<a href='portfolio.php'>포트폴리오 페이지 이동</a>";
}
else
    echo "예약등록 처리에 실패하였습니다.<br>".$conn->error;
?>