<?php
/*
	chapter 138. input태그의 radio 설정

	<input type="radio" ~~~~ />
	- checked옵션을 사용 가능.
	- 다른 input과 달리 직접 입력이 불가능하기 때문에 value값을 보내기만한다.
*/
show_source("./138-input-radio.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input태그의 radio</title>
</head>

<body>
	<h1>당신의 취미는?????</h1>
	<form name="form" method="POST" action="./137-input-radio" >
		음악감상<input type="radio" name="myHobby" value="music" checked/>
		영화감상<input type="radio" name="myHobby" value="movie" />
		수집<input type="radio" name="myHobby" value="collection" />
	</form>
</body>
</html>
