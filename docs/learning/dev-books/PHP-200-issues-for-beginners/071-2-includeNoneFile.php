<pre>
  /*
    chapter 71-2.

    include는 없는 파일을 로드해도 소스가 정상적으로 동작.
  */

  include "noneFile.php";
  echo "페이지에 오류가 없습니다.";

  // Warning만 뜰 뿐 에러메시지아래 echo를 실행한다.
</pre>
<hr>
<?php
/*
  chapter 71-2.

  include는 없는 파일을 로드해도 소스가 정상적으로 동작.
*/

include "noneFile.php";
echo "페이지에 오류가 없습니다.";

// Warning만 뜰 뿐 에러메시지아래 echo를 실행한다.
?>
