<?php>
/*이렇게 만들면 보안에 취약하다.*/
// mysql_connect('scott', 'tiger');

/* 페스워드 파일을 분리하고 사용할 곳에 include 시켜서 사용한다.*/
include 'password.php';
mysql_connect($id, $password);
?>