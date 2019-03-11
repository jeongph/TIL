<pre>
  /*
    chapter 79. 정규식 이메일
  */
  $pattern = ''; //이건 심하잖아..
  $str = '';

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
  chapter 79. 정규식 이메일
*/
$pattern = ''; //이건 심하잖아..
$str = '';

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
