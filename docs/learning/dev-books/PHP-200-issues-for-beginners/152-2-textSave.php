<?php
/*
	chapter 152-2. textarea태그 내용 파일에 저장

	$fp=fopen( $filename, 'w')
	$fw = fwrite( $fp, "Text" );
	- 파일에 저장하는건 디비랑 똑같다. 명령만 다를뿐
*/
$content = $_POST['text'];
$fileName = "test.txt";

if( $fp )
{
	$fw = fwrite( $fp, $content );

	if( $fw ) echo "파일 쓰기 성공";
	else echo "파일 쓰기 실패";
} else echo "파일 열기 실패";

show_source("./152-2-textSave.php");
echo "<hr />";
?>
