<pre></pre>
<hr>
<?php
/*
  chapter 101. 세션 생성과 사용

  session_start();
  $_SESSION[]  = '';

  - 세션은 쿠키랑 비슷하지만 정보를 컴퓨터가 아닌 서버에 저장(중요)
  - 웹브라우저 설정시 쿠키를 차단하면 쿠키는 의미가없다 -> 세션을 더 자주 사용.
*/
session_start();  // 세션 생성(사용한다는 뜻이고, 유지되며, 한번 선언한 세션이 있다면 그대로 사용)

$_SESSION['user_id'] = 'everdevel';

if( isset( $_SESSION['user_id'] ) )
  echo "세션 생성 완료 및 값 있음 = {$_SESSION['user_id']}";
else
  echo "세션 생성 실패.";
?>
