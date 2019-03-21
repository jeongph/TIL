<?php
show_source('./'.basename(__FILE__));
echo "<hr />";
/*
	chapter 157-2.
*/
$data = file_get_contents('./157-1.json');

if( $data !== false )
{
	echo "데이터형: ".gettype( $data ). "<br />";
	echo "<pre>";
	echo $data;
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
