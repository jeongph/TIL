<pre>
  /*
    chapter 78. 정규식 영문 대문자
  */
  $pattern = '/^(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}$/';
  $str = '010-1234-5678';

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
  chapter 78. 정규식 영문 대문자
*/
$pattern = '/^(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}$/';
$str = '010-1234-5678';

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
