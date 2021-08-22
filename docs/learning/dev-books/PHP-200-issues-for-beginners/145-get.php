<?php
/*
	chapter 145. GET 방식으로 데이터 받기

	- 슈퍼 전역변수 $_GET으로 사용.
	- GET방식과 POST방식의 차이 꼭 알아야된다.
	-
*/
echo "age = ".$_GET['age'];
echo "<br>";
echo "hobby = ".$_GET['hobby'];

show_source("./145-get.php");	///145-get.php?age=24&hobby=10
echo "<hr />";
?>
