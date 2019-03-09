<pre>
  /*
    chapter 63. 랜덤값 구하기.

    rand( 시작값, 끝값 );
    자바와 비교하면 생각보다 쓰기 쉬움;;
  */
  $randNum = rand(1, 3);
  $kawibawibo = ''; // 변수명이 이게 뭐야..

  switch( $randNum )
  {
    case 1:
      $kawibawibo = '가위';
    break;

    case 2:
      $kawibawibo = '바위';
    break;

    case 2:
      $kawibawibo = '보';
    break;

    default :
      $kawibawibo = '에러';
    break;
  }

  echo "가위바위보 : {$kawibawibo}";
</pre>
<hr>
<?php
/*
  chapter 63. 랜덤값 구하기.

  rand( 시작값, 끝값 );
  자바와 비교하면 생각보다 쓰기 쉬움;;
*/
$randNum = rand(1, 3);
$kawibawibo = ''; // 변수명이 이게 뭐야..

switch( $randNum )
{
  case 1:
    $kawibawibo = '가위';
  break;

  case 2:
    $kawibawibo = '바위';
  break;

  case 2:
    $kawibawibo = '보';
  break;

  default :
    $kawibawibo = '에러';
  break;
}

echo "가위바위보 : {$kawibawibo}";
?>
