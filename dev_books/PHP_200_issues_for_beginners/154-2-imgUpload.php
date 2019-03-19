<?php
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$myTempFile = $_FILES['imgFile']['tmp_name'];

//파일 타입 및 확장자 구하기
$fileTypeExtension = explode("/", $_FILES['imgFile']['type']);

// 파일 타입
$fileType = $fileTypeExtension[0];
// 확장자
$extension = $fileTypeExtension[1];

// 확장자 검사
$isExtGood = false;
switch( $extension )
{
	case 'jpeg':
	case 'bmp':
	case 'gif':
	case 'png':
		$isExtGood = true;
	break;

	default :
		echo "허용자 ~";
		exit;
	break;
}

// 이미지 파일 맞는지 확인
if( $fileType == 'image' )
{
	// 확장자 정하고 이외 불가
	if( $isExtGood )
	{
		// 파일명 저장
		$myFile = "./happyCat.{$extension}";
		// 임시파일 옮김
		$imageUpload = move_uploaded_file( $myTempFile, $myFile );

		// 성공여부 확인
		if( $imageUpload == true )
		{
			echo '파일이 정상적으로 업로드 <br>';
			echo "<img src='{$myFIle}' width='100' />";
		}else
		{
			echo "실패";
		}
	}
	else
	{
		echo "확장자 공고";
		exit;
	}
}
else
{
	echo "이미지 파일이 아니다";
	exit;
}
?>
