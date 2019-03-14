<pre>
  /*
    chapter 103. 모든 세션 삭제.

    session_destroy();
    - 모든 세션을 삭제
  */

  session_start();

  // ? 3개의; 세션 생성
  $_SESSION['session1'] = 'everdevel';
  $_SESSION['session2'] = 'everdevel2';
  $_SESSION['session3'] = 'everdevel3';

  // 생성된 세션 확인

  echo "<pre>";
  var_dump( $_SESSION );
  echo "</pre>";

  if( session_destroy() ) echo "삭제 완료";
  else echo "삭제 실패";
</pre>
<hr>
<?php
/*
  chapter 103. 모든 세션 삭제.

  session_destroy();
  - 모든 세션을 삭제
*/

session_start();

// ? 3개의; 세션 생성
$_SESSION['session1'] = 'everdevel';
$_SESSION['session2'] = 'everdevel2';
$_SESSION['session3'] = 'everdevel3';

// 생성된 세션 확인

echo "<pre>";
var_dump( $_SESSION );
echo "</pre>";

if( session_destroy() ) echo "삭제 완료";
else echo "삭제 실패";
?>
