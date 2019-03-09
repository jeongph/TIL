<pre>
  /*
    chapter 53. 특정 날짜가 있는 주의 월요일 날짜 구하기

    으, 너무 몇일 못해서 초급 한번에 다 떼야할 것 같다.

    특정 요일을 지정하고, 그 주의 월요일 날짜와 금요일의 날짜를 구하는 방법.
    주로 월요일부터 금요일까지의 통계를 만드는 등에 사용
  */

  $year = 2019;
  $month = 4;
  $day = 4;

  // 특정 날짜의 타임 스탬프 구하기.
  $targetDateTimeStamp = mktime(0, 0, 0, $month, $day, $year);

  $dayOfWeek = date('w', $targetDateTimeStamp );  //

  $secondOfOneDay = 60 * 60 * 24; // 1분 * 1시간 * 1일

  switch( $dayOfWeek )  //
  {
    case 1: // 월
      $monday = $targetDateTimeStamp;
      $friday = $targetDateTimeStamp + ( $secondOfOneDay * 4 );
    break;

    case 2: // 화
      $monday = $targetDateTimeStamp - ( $secondOfOneDay * 1 );
      $friday = $targetDateTimeStamp + ( $secondOfOneDay * 3 );
    break;

    case 3: // 수
      $monday = $targetDateTimeStamp - ( $secondOfOneDay * 2 );
      $friday = $targetDateTimeStamp + ( $secondOfOneDay * 2 );
    break;

    case 4: // 목
      $monday = $targetDateTimeStamp - ( $secondOfOneDay * 3 );
      $friday = $targetDateTimeStamp + ( $secondOfOneDay * 1 );
    break;

    case 5: // 금
      $monday = $targetDateTimeStamp - ( $secondOfOneDay * 4 );
      $friday = $targetDateTimeStamp;
    break;
  }

  if( isset($monday) && isset($friday) )
  {
    echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜";
    echo '<br />';
    echo '월요일 : '.date('Y-m-d', $monday);
    echo '<br>';
    echo '금요일 : '.date('Y-m-d', $friday);
  }
  else
  {
    echo "월요일 부터 금요일의 날짜를 입력하세요.";
  }
</pre>
<hr>
<?php
/*
  chapter 53. 특정 날짜가 있는 주의 월요일 날짜 구하기

  으, 너무 몇일 못해서 초급 한번에 다 떼야할 것 같다.

  특정 요일을 지정하고, 그 주의 월요일 날짜와 금요일의 날짜를 구하는 방법.
  주로 월요일부터 금요일까지의 통계를 만드는 등에 사용
*/

$year = 2019;
$month = 4;
$day = 4;

// 특정 날짜의 타임 스탬프 구하기.
$targetDateTimeStamp = mktime(0, 0, 0, $month, $day, $year);

$dayOfWeek = date('w', $targetDateTimeStamp );  //

$secondOfOneDay = 60 * 60 * 24; // 1분 * 1시간 * 1일

switch( $dayOfWeek )  //
{
  case 1: // 월
    $monday = $targetDateTimeStamp;
    $friday = $targetDateTimeStamp + ( $secondOfOneDay * 4 );
  break;

  case 2: // 화
    $monday = $targetDateTimeStamp - ( $secondOfOneDay * 1 );
    $friday = $targetDateTimeStamp + ( $secondOfOneDay * 3 );
  break;

  case 3: // 수
    $monday = $targetDateTimeStamp - ( $secondOfOneDay * 2 );
    $friday = $targetDateTimeStamp + ( $secondOfOneDay * 2 );
  break;

  case 4: // 목
    $monday = $targetDateTimeStamp - ( $secondOfOneDay * 3 );
    $friday = $targetDateTimeStamp + ( $secondOfOneDay * 1 );
  break;

  case 5: // 금
    $monday = $targetDateTimeStamp - ( $secondOfOneDay * 4 );
    $friday = $targetDateTimeStamp;
  break;
}

if( isset($monday) && isset($friday) )
{
  echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜";
  echo '<br />';
  echo '월요일 : '.date('Y-m-d', $monday);
  echo '<br>';
  echo '금요일 : '.date('Y-m-d', $friday);
}
else
{
  echo "월요일 부터 금요일의 날짜를 입력하세요.";
}
?>
