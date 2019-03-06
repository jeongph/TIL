<pre>
  /*
    chapter 52. 특정 시간에만 특정 명령어 작동

    오,, 신긴한데 요거
  */

  // 독자들의 현재 예제 테스트 가능 시간으로 설정
  // 시작 시간
  $startTime = mktime(0, 0, 0, 1, 1, 2019);

  // 종료 시간
  $endTime = mktime(0, 59, 59, 1, 1, 2019);

  $nowTime = time();

  if( $nowTime >= $startTime && $nowTime <= $endTime )
  {
    echo "이벤트시간";
  }
  else {
    // code...
    echo "이벤트시간 아님";
  }
</pre>
<hr>
<?php
/*
  chapter 52. 특정 시간에만 특정 명령어 작동

  오,, 신긴한데 요거
*/

// 독자들의 현재 예제 테스트 가능 시간으로 설정
// 시작 시간
$startTime = mktime(0, 0, 0, 1, 1, 2019);

// 종료 시간
$endTime = mktime(0, 59, 59, 1, 1, 2019);

$nowTime = time();

if( $nowTime >= $startTime && $nowTime <= $endTime )
{
  echo "이벤트시간";
}
else {
  // code...
  echo "이벤트시간 아님";
}
?>
