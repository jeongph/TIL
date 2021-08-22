<pre>
  /*
    chapter 76. 정규식
  */
  $pattern = '/^[a-zA-Z가-힣. ]+$/';
  $str = '안녕하세요. Hello.';

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
  chapter 76. 정규식
*/
$pattern = '/^[a-zA-Z가-힣. ]+$/';
$str = '안녕하세요. Hello.';

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
