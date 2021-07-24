<?php
show_source('./'.basename(__FILE__));
echo "<hr />";
/*
	chapter 156. 자바스크립트로 JSON 데이터 다루기

	<script></script>
	- console.log()로 개발자도구에 표시해서 디버깅
*/
?>
<!doctype html>
<html>
<head>
	<script>
		data = {userID:['first', 'second', 'third']};
		console.log( data.userID[0] );
		console.log( data.userID[1] );
		console.log( data.userID[2] );
		// 콘솔에서 확인.
	</script>
</head>

<body>
</body>
</html>
