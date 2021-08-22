<pre>
  /*
    chapter 29. for 반복문 안 if 조건문 사용하기

    음.. 이게 왜 따로 챕터가 있는지 모르겠지만, 반복문에 그냥 조건문 넣는거
  */

  $sum = 0;
  $maxValue = 50;

  for ( $i = 1; $i <= $maxValue; $i++ )
  {
    if ( $i % 2 == 0 )
    {
      $sum += $i;
    }
  }

  echo "1부터 {$maxValue}까지의 합 = {$sum}";
</pre>
<hr>
<?php
/*
  chapter 29. for 반복문 안 if 조건문 사용하기

  음.. 이게 왜 따로 챕터가 있는지 모르겠지만, 반복문에 그냥 조건문 넣는거
*/

$sum = 0;
$maxValue = 50;

for ( $i = 1; $i <= $maxValue; $i++ )
{
  if ( $i % 2 == 0 )
  {
    $sum += $i;
  }
}

echo "1부터 {$maxValue}까지의 합 = {$sum}";
 ?>
