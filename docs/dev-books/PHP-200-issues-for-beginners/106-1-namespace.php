<?php
/*
  chapter 106-1. namespace

  namespace 네임스페이스명;
  호출: \네임스페이스명\함수명();
  - 드디어 네임스페이스..
  - 어려울 것 같으니 제대로 숙지;
  - 같은 클래스나 함수명을 사용해도 네임스페이스 그룹으로 묶어서 에러없이 해당 네임스페이스의 클래스를 호출해준다.
  - 오버라이딩이 있는지 모르겠지만 그런용도인듯
*/
namespace a;

function load()
{
  return "1";
}

namespace b;

function load()
{
  return "2";
}

echo \a\load();
echo "<br>";
echo \b\load();

// error : Namespace declaration statement has to be the very first statement or after any declare call in the script
// 미친.. 네임스페이스는 항상 첫번째 php에 호출해야.. 가능..
?>
<pre>
  /*
    chapter 106-1. namespace

    namespace 네임스페이스명;
    호출: \네임스페이스명\함수명();
    - 드디어 네임스페이스..
    - 어려울 것 같으니 제대로 숙지;
    - 같은 클래스나 함수명을 사용해도 네임스페이스 그룹으로 묶어서 에러없이 해당 네임스페이스의 클래스를 호출해준다.
    - 오버라이딩이 있는지 모르겠지만 그런용도인듯
  */
  namespace a;

  function load()
  {
    return "1";
  }

  namespace b;

  function load()
  {
    return "2";
  }

  echo \a\load();
  echo "<br>";
  echo \b\load();

  // error : Namespace declaration statement has to be the very first statement or after any declare call in the script
  // 미친.. 네임스페이스는 항상 첫번째 php에 호출해야.. 가능..
</pre>
<hr>
