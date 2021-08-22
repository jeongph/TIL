<pre></pre>
<hr>
<?php
/*
  chapter 73. 정규식
*/
$pattern = '/^i+$/';
$str = 'ii';

if( preg_match( $pattern, $str, $matches ))
{
  echo "값 {$str} 은 정규식 표현에 적ㅈ합한 값입니다.";
  echo "<pre>";
  var_dump( $matches );
  echo "</pre>";

}else
{
  echo "없음";
}
?>
