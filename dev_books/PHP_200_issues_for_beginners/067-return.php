<pre>
  /*
    chapter 67. 함수에서 값 반환하기;

    return 전달 값;
    함수 앞부분은 기초 부분에 해당하는 것 같음.
    일단 함수 만드는것부터 사용법 전반부가 다른언어랑 동일함(like C);
  */
  //함수 생성
  function sum( $num1, $num2 )
  {
    $sum = $num1 + $num2;
    return $sum;
  }

  echo "함수<br>";

  echo sum( 5, 10 );

  $plus = sum(5, 10 );
  echo '<br>';
  echo $plus + 10;
</pre>
<hr>
<?php
/*
  chapter 67. 함수에서 값 반환하기;

  return 전달 값;
  함수 앞부분은 기초 부분에 해당하는 것 같음.
  일단 함수 만드는것부터 사용법 전반부가 다른언어랑 동일함(like C);
*/
//함수 생성
function sum( $num1, $num2 )
{
  $sum = $num1 + $num2;
  return $sum;
}

echo "함수<br>";

echo sum( 5, 10 );

$plus = sum(5, 10 );
echo '<br>';
echo $plus + 10;
?>
