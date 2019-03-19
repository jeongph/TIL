<?php
/*
	chapter 149. 입력한 데이터 데이터베이스에 입력

	- insert into 테이블명 values(값);
	-
*/
show_source("./149-1-form-post.php");
echo "<hr />";
?>

<!doctype html>
<html>
<head>
	<title>테이블의 데이터 입력 폼</title>
</head>

<body>
	<form name="test" method="post" action="./149-2-insert.php" >
		<input type="text" name="userId" placeholder="아이디 입력" required />
		<br />
		<input type="text" name="userName" placeholder="이름 입력" required />
		<br />
		<input type="password" name="userPw" placeholder="비밀번호 입력" required />
		<br />
		<input type="text" name="userPhone" placeholder="휴대폰" required />
		<br />
		<input type="email" name="userEmail" placeholder="이메일 입력" required />
		<br />
		생일:<br />
		<select name="birthYear" required>
		<?php
		$thisYear = date( 'Y', time() );
		for( $i = 1960; $i <= $thisYear; $i++ )
		{
			echo "<option value='{$i}'>{$i}</option>";
		}
		?>
	</select>년

	<select name="birthMonth" required>
		<?php
		for( $i = 1; $i <= 31; $i++ )
		{
			echo "<option value='{$i}'>{$i}</option>";
		}
		?>
	</select>일
	<br />
	성별 : <br>
	남<input type="radio" name="userGender" value="m" required />
	여<input type="radio" name="userGender" value="w" required />
	<br>
	<input type="submi" value="입력" />
	</form>
</body>
</html>
