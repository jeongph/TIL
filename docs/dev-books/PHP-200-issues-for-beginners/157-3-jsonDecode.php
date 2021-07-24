<?php
show_source('./'.basename(__FILE__));
echo "<hr />";
/*
	chapter 157-2.
*/
$data = file_get_contents('./157-1.json');

if( $data !== false )
{
	$data = json_decode( $data, true );
	echo "데이터형: ".gettype( $data ). "<br />";
	echo "<pre>";
	echo $data['student'][0]['score']['math'];
	echo "</pre>";
}
else
{
	echo "실패";
}
?>

<!doctype html>
<html>
<head>
</head>

<body>
</body>
</html>
