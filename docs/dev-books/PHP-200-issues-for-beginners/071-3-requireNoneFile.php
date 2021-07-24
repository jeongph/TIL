<pre></pre>
<hr>
<?php
/*
  chapter 71-3.

  require은 파일이 없을 경우 소스 자체가 실행이 안된다.
*/

require "noneFile.php";
echo "Test";
//require(): Failed opening required 'noneFile.php'
?>
