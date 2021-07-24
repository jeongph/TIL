<pre></pre>
<hr>
<?php
/*
  chapter 102. 세션 삭제.

  unset(세션명);
  - 쿠키와 달리 세션은 삭제 함수가 있음.
*/

session_start();

if( isset($_SESSION['user_id']) )
{
  echo "1. 세션이 있음";

  // 세션이 있는걸 삭제
  unset( $_SESSION['user_id'] );
}
else echo "세션이 없습니다.";

echo "<br>";
echo "세션값 = ".$_SESSION['user_id']; // Notice 뜸.
?>
