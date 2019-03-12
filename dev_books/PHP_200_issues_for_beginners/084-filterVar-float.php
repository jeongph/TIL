<pre>
  /*
    chapter 84. filter_var() 함수로 실수 유효성 검사.

    filter_var( 검사값, FILTER_VALIDATE_FLOAT );

  */
  $float = 1.2;
  $floatCheck = filter_Var( $float, FILTER_VALIDATE_FLOAT );

  if( $floatCheck )
  {
    echo "실수";
  }
  else
  {
    echo "아님";
  }
</pre>
<hr>
<?php
/*
  chapter 84. filter_var() 함수로 실수 유효성 검사.

  filter_var( 검사값, FILTER_VALIDATE_FLOAT );

*/
$float = 1.2;
$floatCheck = filter_Var( $float, FILTER_VALIDATE_FLOAT );

if( $floatCheck )
{
  echo "실수";
}
else
{
  echo "아님";
}
?>
