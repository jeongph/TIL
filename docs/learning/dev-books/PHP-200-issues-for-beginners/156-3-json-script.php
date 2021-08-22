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
		data = {
		student:[
		{
			name:'mima',
			score:
			{
				math:4,
				english:5,
				science:6
			}
		},
		{
			name:'haro',
			score:
			{
				math:7,
				english:8,
				science:9
			}
		}]};
		console.log( data.student[0].score.math );
		// 콘솔에서 확인.
	</script>
</head>

<body>
</body>
</html>
