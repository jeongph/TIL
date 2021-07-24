<pre></pre>
<hr>
<?php
/*
  chapter 73. 정규표현식

  preg_match(패턴, 검사텍스트, 반환할 결과를 받을 텍스트); 함수
*/
//패턴 대입
$pattern = '/^i$/';
$str = 'i';

if( preg_match( $pattern, $str, $matches ))
{
  echo "값 {$str}은 정규식 표현에 적절한 값입니다.";
  echo "<pre>";
  var_dump( $matches );
  echo "</pre>";
}
else
{
  echo "이름에 특수문자, 한글, 숫자 확인";
}

?>
