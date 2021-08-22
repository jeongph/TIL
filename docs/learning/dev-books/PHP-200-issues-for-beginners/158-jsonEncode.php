<?php
show_source('./'.basename(__FILE__));
echo "<hr />";
/*
	chapter 158. PHP에서 데이터를 JSON으로 변형

	json_encode(변수);
	- 배열을 JSON형태로 만들어줌.
*/
echo json_encode( array('result' => 'success', 'data'=> 100) );
?>

<!doctype html>
<html>
<head>
</head>

<body>
</body>
</html>
