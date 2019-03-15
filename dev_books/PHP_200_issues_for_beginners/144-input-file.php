<?php
/*
	chapter 144. input-file 사용

*/
show_source("./144-input-file.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>input-file 태그</title>
</head>

<body>
	<form name="form" method="POST" action="" enctype="multipart/form-data">
		파일:<input type="file" name="attachedFile" />
	</form>
</body>
</html>
