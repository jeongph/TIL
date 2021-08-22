<?php
/*
	chapter 150-2. addslashes

	- 계속 데이터베이스 연동이 나오므로 주요 기술들만 기재하도록 함.
*/
$text = $_POST['text'];	// 텍스트 받아오는거 똑같음
// sql문 입력
// sql문 대입

/*
	addslashes(문자열);

	- $text = addslashes($_POST[]);
	- 이렇게 하면 텍스트 에리어 안의 슬래시를 자동으로 입력 해줌.

*/
show_source("./150-2-textSave.php");
echo "<hr />";
?>
