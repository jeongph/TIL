<pre>
  /*
    chapter 75. 정규식 영문 대문자
  */
  $pattern = '/^[A-Z]+$/';
  $str = 'TOMODEVEL';

  if( preg_match( $pattern, $str, $matches ))
  {
    echo "값 {$str} 은 정규식 표현에 적합한 값입니다.";
    echo "<pre>";
    var_dump( $matches );
    echo "</pre>";

  }else
  {
    echo "없음";
  }
</pre>
<hr>
<?php
/*
  chapter 75. 정규식 영문 대문자
*/
$pattern = '/^[A-Z]+$/';
$str = 'TOMODEVEL';

if( preg_match( $pattern, $str, $matches ))
{
  echo "값 {$str} 은 정규식 표현에 적합한 값입니다.";
  echo "<pre>";
  var_dump( $matches );
  echo "</pre>";

}else
{
  echo "없음";
}
?>
