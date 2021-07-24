<?php
/*
	chapter 143. select 사용

	<select name="" >
	<option value="">~</option>
	</select>
*/
show_source("./143-select.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>select 태그</title>
</head>

<body>
	<form name="form" method="POST" action="./143-select.php">
		<select name="month">
			<?
			for($i = 1; $i <= 12; $i++)
			{
				echo '<option value="'.$i.'" >'.$i.'월</option>';
			}
			?>
		</select>
		<input type="submit" value="test" />
	</form>
</body>
</html>
