<pre>
  /*
    chapter 68. 파라미터의 기본값 설정

    ex > function sum( $param1, $param2 ){}

    이게좀 중요한건데, 아무래도 다른 규율적인 언어들과 달리 스크립트 언어의 특성상
    매개변수의 제약이 적다는 큰 장점이 있음;
  */
  function sum( $param1 = 50, $param2 = 100 ) //이런식으로 default 값을 지정
  {
    $sum = $param1 + $param2;

    return $sum;
  }

  // 아규먼트 모두 적어서 호출
  echo "sum(5, 10) = ".sum(5, 10);
  echo "<br>";  // br 적는 함수를 만들어놓던가 해야지;

  // 매개변수를 부족하게 제출
  echo "sum( 5 ) = ".sum(5);
  echo "<br>";

  // 매개변수 아예 없이 호출
  echo "sum() = ".sum();
</pre>
<hr>
<?php
/*
  chapter 68. 파라미터의 기본값 설정

  ex > function sum( $param1, $param2 ){}

  이게좀 중요한건데, 아무래도 다른 규율적인 언어들과 달리 스크립트 언어의 특성상
  매개변수의 제약이 적다는 큰 장점이 있음;
*/
function sum( $param1 = 50, $param2 = 100 ) //이런식으로 default 값을 지정
{
  $sum = $param1 + $param2;

  return $sum;
}

// 아규먼트 모두 적어서 호출
echo "sum(5, 10) = ".sum(5, 10);
echo "<br>";  // br 적는 함수를 만들어놓던가 해야지;

// 매개변수를 부족하게 제출
echo "sum( 5 ) = ".sum(5);
echo "<br>";

// 매개변수 아예 없이 호출
echo "sum() = ".sum();
?>
