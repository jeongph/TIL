<?php
/*
	chapter 140. input태그에 email 사용

	<input type="email" ~~~~~/>
	- submit을 시전해야 폼태그 내용이 전송됨.
*/
show_source("./140-input-email.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input태그</title>
</head>

<body>
	<? // submit으로 폼을 전송해보면 이메일 형식이 안맞는다는 문구가 뜬다.?>
	<form name="form" method="POST" action="./140-input-email.php">
		<input type="email" name="text" placeholder="텍스트 입력" />
		<input type="submit" value="누르세요." />
	</form>
</body>
</html>
