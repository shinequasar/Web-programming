<?php
session_start();
// 세션삭제 : $_SESSON 변수들이 지워짐
session_destroy();
header("location:Home.php");
?>