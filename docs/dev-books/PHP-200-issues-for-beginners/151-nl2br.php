<?php
/*
	chapter 151. 줄바꿈 대응

	nl2br(문자열);
	- 이렇게 작성하면 줄바꿈에 들어간 "\n"을 그대로 br로 대응해준다.

*/
$_str = nl2br("text\n2text");
echo $_str;

show_source("./151-nl2br.php");
echo "<hr />";
?>
