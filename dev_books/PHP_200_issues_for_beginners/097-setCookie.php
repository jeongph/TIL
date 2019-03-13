<pre>
  /*
    chapter 97. 쿠키와 쿠키 생성.

    setcookie("쿠키명", "셋팅값", 쿠키 유지시간);
    네번째 arg는 쿠키의 적용 범위(경로)
    다섯번째 args는 적용할 도메인
    여섯번째 args는 프로토콜이 http와 https중 어디서 동작하는지
  */
  setcookie('memberID', 'everdevel', time()+3600, '/' );
</pre>
<hr>
<?php
/*
  chapter 97. 쿠키와 쿠키 생성.

  setcookie("쿠키명", "셋팅값", 쿠키 유지시간);
  네번째 arg는 쿠키의 적용 범위(경로)
  다섯번째 args는 적용할 도메인
  여섯번째 args는 프로토콜이 http와 https중 어디서 동작하는지
*/
setcookie('memberID', 'everdevel', time()+3600, '/' );
?>
