<pre>
  /*
    chapter 98. 쿠키의 값 확인.

    $_COOKIE[쿠키명];
    슈퍼 전역변수인 COOKIE에 저장됨.
  */
  if( isset($_COOKIE['memberID']) )
  {
    echo "쿠키값 = ".$_COOKIE['memberID'];
  }
  else
  {
    echo "쿠키값이 없습니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 98. 쿠키의 값 확인.

  $_COOKIE[쿠키명];
  슈퍼 전역변수인 COOKIE에 저장됨.
*/
if( isset($_COOKIE['memberID']) )
{
  echo "쿠키값 = ".$_COOKIE['memberID'];
}
else
{
  echo "쿠키값이 없습니다.";
}
?>

<pre>
  <?= print_r( $_COOKIE, true ) ?>
</pre>
