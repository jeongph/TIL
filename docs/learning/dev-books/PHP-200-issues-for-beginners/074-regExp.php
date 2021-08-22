<pre>
  /*
    chapter 74. 정규표현식 한글

    $pattern = '/^[가-힣]$/';
  */
  $pattern = '/^[가-힣]{3,}$/';
  $str = '웹코딩시작하기';

  if( preg_match( $pattern, $str, $matches ))
  {
    echo "값 {$str}은 정규식 표현에 적합한 값";
    echo "<pre>";
    var_dump( $matches );
    echo "</pre>";
  }
  else
  {
    echo "들어간게 없습니다.";
  }

</pre>
<hr>
<?php
/*
  chapter 74. 정규표현식 한글

  $pattern = '/^[가-힣]$/';
*/
$pattern = '/^[가-힣]{3,}$/';
$str = '웹코딩시작하기';

if( preg_match( $pattern, $str, $matches ))
{
  echo "값 {$str}은 정규식 표현에 적합한 값";
  echo "<pre>";
  var_dump( $matches );
  echo "</pre>";
}
else
{
  echo "들어간게 없습니다.";
}

?>
