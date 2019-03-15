<?php
/*
	chapter 141. input태그에 url 사용

	<input type="url" ~~~~~/>
	- submit을 시전해야 폼태그 내용이 전송됨.
*/
show_source("./141-input-url.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input태그</title>
</head>

<body>
	<? // submit으로 폼을 전송해보면 URL을 입력하라는 문구가 뜬다.?>
	<form name="form" method="POST" action="./141-input-url.php">
		<input type="url" name="text" placeholder="텍스트 입력" />
		<input type="submit" value="누르세요." />
	</form>
</body>
</html>
