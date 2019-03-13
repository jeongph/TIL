<pre>
  /*
    chapter 99. 쿠키의 적용 범위 확인.

    setcookie('check', 'only php folder', time()+3600, '/php/' );
    폴더 범위를 지정하면 해당 폴더에서만 쿠키값을 확인 가능.
  */

  setcookie('check', 'only php folder', time()+3600, './' );

  if( isset($_COOKIE['check']) )
  {
    echo "쿠키값 = ".$_COOKIE['check'];
  }
  else
  {
    echo "쿠키 check가 없습니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 99. 쿠키의 적용 범위 확인.

  setcookie('check', 'only php folder', time()+3600, '/php/' );
  폴더 범위를 지정하면 해당 폴더에서만 쿠키값을 확인 가능.
*/

setcookie('check', 'only php folder', time()+3600, './' );

if( isset($_COOKIE['check']) )
{
  echo "쿠키값 = ".$_COOKIE['check'];
}
else
{
  echo "쿠키 check가 없습니다.";
}
?>
