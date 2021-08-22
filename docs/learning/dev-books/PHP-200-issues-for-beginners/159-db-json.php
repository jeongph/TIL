<?php
show_source('./'.basename(__FILE__));
echo "<hr />";
/*
	chapter 159. 데이터베이스 자료를 JSON으로 만들기

	- DB가 계속해서 나오니깐 그냥 DB 연동을 해놔야겠다.
*/

$sql = "SELECT * FROM myMember";
$result = $dbConnect -> query( $sql );

$dataCount = $result ->num_rows;

$memberList = array();

for($i = 0; $i < $dataCount; $i++)
{
	$memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
	array_push( $memberList, $memberInfo );
}

echo json_encode( array('data' => $memberList,) );
?>

<!doctype html>
<html>
<head>
</head>

<body>
</body>
</html>
