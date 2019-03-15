<?php
/*
	chapter 137. input태그의 checkbox 설정

	<input type="checkbox" ~~~~ />
	- checked옵션을 사용 가능.
	- 다른 input과 달리 직접 입력이 불가능하기 때문에 value값을 보내기만한다.
*/
show_source("./137-input-checkbox.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input태그의 checkbox</title>
</head>

<body>
	<h1>당신의 취미는?????</h1>
	<form name="form" method="POST" action="./137-input-checkbox" >
		음악감상<input type="checkbox" name="myHobby" value="music" checked/>
		영화감상<input type="checkbox" name="myHobby" value="movie" />
		수집<input type="checkbox" name="myHobby" value="collection" />
	</form>
</body>
</html>
