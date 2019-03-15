<pre></pre>
<hr>
<?php
/*
	chapter 137. input 태그의 type password

	<input type="password" ~~~~ />
	- 타입을 패스워드로 하면 입력칸에 "*"로 표기, editText넣고 옵션줬을때랑 똑같음.
*/
show_source("./136-input-pw.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input태그의 password 옵션</title>
</head>

<body>
	<form name="form" method="POST" action="136-input-pw.php">
		<input type="password" name="pw" placeholder="여기도 마찬가지" />	<!-- 입력해보면 * 로 뜬다. -->
	</form>
</body>
</html>
