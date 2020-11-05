<?php
include_once('dbconn.php');
$email = $_POST['email'];
$wdate = $_POST['wdate'];
$title = $_POST['title'];
$note = $_POST['note'];

$sql = "insert into board(email,wdate,title,note) values('$email','$wdate','$title','$note')";
if($conn->query($sql)) {
    echo "게시글이 저장되었습니다.";
}
else {
    echo "게시글 저장에 오류가 발생했습니다. <br>";
    echo $conn->error;
}
?>
