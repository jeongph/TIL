<?php
/*
	chapter 149. 데이터 넘어오는 php
*/
// include $_SERVER['DOCUMENT_ROOT'].'/php/108-2-connectDB.php';

$uId = $_POST['userId'];
$uName = $_POST['userName'];
$uPw = $_POST['userPw'];
$uPhone = $_POST['userPhone'];
$uEmail = $_POST['userEmail'];
$uBirthDay = $_POST['birthYear'].'-'.$_POST['birthMonth'].'-'.$_POST['birthDay'];
$uGender = $_POST['userGender'];

$sql = "INSERT INTO t ( )";
$sql .= "VALUE()";

$result = $dbConnect -> query($sql);

if( $result )
{
	$sql = "SELECT * FROM ~";
	$result = $dbConnect -> query( $sql );

	$dataCount = $result -> num_rows;

	for()
	{

	}
}else {
	// code...
}

show_source("./149-2-insert.php");
echo "<hr />";
?>
