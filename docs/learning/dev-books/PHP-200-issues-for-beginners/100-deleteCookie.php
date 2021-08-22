<pre>
  /*
    chapter 100. 쿠키 삭제

    setcookie( "삭제하려는 쿠키명", "값", time()-100 )
    -100 시간을 적용하여 쿠키를 삭제.
  */
  setcookie('memberID', 'everdevel', time()-100, '/' );
</pre>
<hr>
<?php
/*
  chapter 100. 쿠키 삭제

  setcookie( "삭제하려는 쿠키명", "값", time()-100 )
  -100 시간을 적용하여 쿠키를 삭제.
*/
setcookie('memberID', 'everdevel', time()-100, '/' );
?>
