<?php
/*
  chapter 106-2. 네임스페이스 클래스 버전
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

$a_user = new \a\user;
$b_user = new \b\user;
echo $a_user -> load();
echo "<br>";
echo $b_user -> load();
?>
<hr>
<pre>
  /*
    chapter 106-2. 네임스페이스 클래스 버전
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

  $a_user = new \a\user;
  $b_user = new \b\user;
  echo $a_user -> load();
  echo "<br>";
  echo $b_user -> load();
</pre>
