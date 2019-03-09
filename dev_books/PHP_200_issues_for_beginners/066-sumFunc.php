<pre>
  /**
    chapter 66. 파라미터(parameter)와 아규먼트(argument)

    함수명( arg1, arg2 );
    함수명( 파라미터1,파라미터2 );
  */

  // 함수 생성
  function sum( $num1, $num2 )
  {
    $sum = $num1 + $num2;
    echo $sum;
  }

  // 아규먼트 2개를 전달
  sum( 5, 10 );
</pre>
<hr>
<?php
/**
  chapter 66. 파라미터(parameter)와 아규먼트(argument)

  함수명( arg1, arg2 );
  함수명( 파라미터1,파라미터2 );
*/

// 함수 생성
function sum( $num1, $num2 )
{
  $sum = $num1 + $num2;
  echo $sum;
}

// 아규먼트 2개를 전달
sum( 5, 10 );
?>
