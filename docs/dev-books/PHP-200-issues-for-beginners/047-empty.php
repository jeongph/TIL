<pre>
  /*
    chapter 47. 변수의 값이 빈 값인지 확인하기

    변수의 빈 값을 확인하기 위해 empty() 함수를 사용
  */

  $var = '';
  echo '값이 빈 문자열인경우';
  var_dump( empty( $var ) );
  echo '<br>';

  $var = NULL;  // NULL은 소문자로 써도 된단다.
  echo '값이 NULL일경우';
  var_dump(empty( $var ));
  echo '<br />';

  $var = array(); // array() 대신 []로 간단하게 써도 됨.
  echo '값이 빈 배열인 경우';
  var_dump( empty( $var ) );
  echo '<br />';

  $var = 0;
  echo '값이 정수 0인경우';
  var_dump( empty( $var ) );
  echo '<br />';

  $var = '0';
  echo '값이 문자열 0인경우';
  var_dump(empty( $var ));
  echo '<br />';

  $var = 'String';
  echo '값이 문자열인경우';
  var_dump(empty( $var ));

</pre>
<hr>
<?php
/*
  chapter 47. 변수의 값이 빈 값인지 확인하기

  변수의 빈 값을 확인하기 위해 empty() 함수를 사용
*/

$var = '';
echo '값이 빈 문자열인경우';
var_dump( empty( $var ) );
echo '<br>';

$var = NULL;  // NULL은 소문자로 써도 된단다.
echo '값이 NULL일경우';
var_dump(empty( $var ));
echo '<br />';

$var = array(); // array() 대신 []로 간단하게 써도 됨.
echo '값이 빈 배열인 경우';
var_dump( empty( $var ) );
echo '<br />';

$var = 0;
echo '값이 정수 0인경우';
var_dump( empty( $var ) );
echo '<br />';

$var = '0';
echo '값이 문자열 0인경우';
var_dump(empty( $var ));
echo '<br />';

$var = 'String';
echo '값이 문자열인경우';
var_dump(empty( $var ));

?>
