<?php
show_source("./150-1-textarea.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title> TEXTAREA 태그 입력</title>
</head>

<body>
	<form name="textsave" method="post" action="./150-2textSave.php" >
		<textarea name="text" ></textarea>
		<input type="submit" value="저장" />
	</form>
</body>
</html>
