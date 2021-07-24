<pre></pre>
<hr>
<?php
/*
	chapter 135. form태그에서 사용하는 input text

	<input type="t" name="n" maxlength="32" />
	- 텍스트를 입력. (안드로이드의 edittext)
*/
show_source("./135-input-text.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>INPUT태그</title>
</head>

<body>
	<form name="form" method="POST" action="./135-input-text.php" >
		<input type="text" name="id" maxlength="10" placeholder="공백일때 뜨는 메시지" />
	</form>
</body>
</html>
