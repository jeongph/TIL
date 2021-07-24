<?php
/*
	chapter 154. 이미지 파일 서버에 업로드.


*/
show_source("./154-fileUploadForm.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
</head>

<body>
	<form name="fileUpload" method="POST" action="./154-2-imgUpload.php" enctype="multipart/form-data" >
		<input type="file" name="imgFile" />
		<input type="submit" value="업로드" />
	</form>
</body>
</html>
