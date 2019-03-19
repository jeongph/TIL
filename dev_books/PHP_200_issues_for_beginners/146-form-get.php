<?php
/*
	chapter 146. GET 방식으로 FORM 태그의 데이터 전송

	<form method="get" action="~" > </form>
	- get으로 전송하면 주소창에 다 뜸.
*/
show_source("./146-form-get.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>데이터 입력폼</title>
</head>

<body>
<form name="test" method="get" action="./145-get.php" />
	나이: <input type="text" name="age" />
	취미: <input type="text" name="hobby" />
	<input type="submit" value="전송" />
</form>
</body>
</html>
