<pre>
  /*
    chapter 59. 실수 반올림

    round를 사용해서 반올림, 내기억엔 이미 한번 쓴적 있는데..
    round( 반올림 할 수, 표시 위치 )
  */
  $num = 16.78;
  $round = round( $num, 1 );
  echo $round;
  echo '<br>';
  echo round( $num, -1 ); // 음수를 써서 소수 이하도 반올림 할 수 있음;

</pre>
<hr>
<?php
/*
  chapter 59. 실수 반올림

  round를 사용해서 반올림, 내기억엔 이미 한번 쓴적 있는데..
  round( 반올림 할 수, 표시 위치 )
*/
$num = 16.78;
$round = round( $num, 1 );
echo $round;
echo '<br>';
echo round( $num, -1 ); // 음수를 써서 소수 이하도 반올림 할 수 있음;

?>
