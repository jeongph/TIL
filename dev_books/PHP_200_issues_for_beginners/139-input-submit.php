<?php
/*
	chapter 139. input태그에 submit 사용

	<input type="submit" ~~~~~/>
	- submit을 시전해야 폼태그 내용이 전송됨.
*/
show_source("./139-input-submit.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input태그에 submit사용</title>
</head>

<body>
	<?//폼태크를 진짜 입력하고 누르면 다시 여기로 돌아오는걸 network에서 확인 가능.?>
	<form name="form" method="POST" action="./139-input-submit.php">
		<input type="text" name="text" placeholder="텍스트 입력" />
		<input type="submit" value="누르세요." />
	</form>
</body>
</html>
