<?php
/*
  chapter 106-3. use

  use \네임스페이스명\클래스명 as 별명
  - SQL의 as랑 사용법 동일.
*/
namespace a;
class user
{
  function load()
  {
    return "user 1";
  }
}

namespace b;
class user
{
  function load()
  {
    return "user 2";
  }
}

use \a\user as a;
use \b\user as b;

$a_user = new a;
$b_user = new b;
echo $a_user -> load();
echo "<br>";
echo $b_user -> load();
?>
<hr>
<pre>
  /*
    chapter 106-3. use

    use \네임스페이스명\클래스명 as 별명
    - SQL의 as랑 사용법 동일.
  */
  namespace a;
  class user
  {
    function load()
    {
      return "user 1";
    }
  }

  namespace b;
  class user
  {
    function load()
    {
      return "user 2";
    }
  }

  use \a\user as a;
  use \b\user as b;

  $a_user = new a;
  $b_user = new b;
  echo $a_user -> load();
  echo "<br>";
  echo $b_user -> load();
</pre>
