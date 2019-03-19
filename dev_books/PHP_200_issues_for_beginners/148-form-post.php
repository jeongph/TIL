<?php
/*
	chapter 148. POST 방식으로 FORM 태그 데이터 전송

	- POST로 전송
*/
show_source("./148-form-post.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>데이터 입력 폼</title>
</head>

<body>
<form name="test" method="post" action="./147-post.php">
	나이: <input type="text" name="age" />
	취미: <input type="text" name="hobby" />
	<input type="submit" value="전송" />
</form>
</body>
</html>
