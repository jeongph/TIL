<pre>
  /*
    chapter 82. filter_Var()로 IP주소 유효성 검사.

    filter_Var(검사값, FILTER_VALIDATE_IP);

    아니 같은 함수면 한번에 하지 왜 몇번에 걸쳐서 하냐..
  */
  $ip = "192.168.0.1"; // local
  $ipCheck = filter_Var( $ip, FILTER_VALIDATE_IP );

  if( $ipCheck)
  {
    echo "올바른 IP";
  }
  else
  {
    echo "잘못된 IP";
  }
</pre>
<hr>
<?php
/*
  chapter 82. filter_Var()로 IP주소 유효성 검사.

  filter_Var(검사값, FILTER_VALIDATE_IP);

  아니 같은 함수면 한번에 하지 왜 몇번에 걸쳐서 하냐..
*/
$ip = "192.168.0.1"; // local
$ipCheck = filter_Var( $ip, FILTER_VALIDATE_IP );

if( $ipCheck)
{
  echo "올바른 IP";
}
else
{
  echo "잘못된 IP";
}
?>
