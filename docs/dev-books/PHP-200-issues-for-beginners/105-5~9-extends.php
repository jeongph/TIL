<pre>/*
  chapter 105-5~9. 상속

  class className extends className2
  - 자바랑 똑같음.
  - 싸잡아서 하는것 별로지만, 상속의 개념을 그대로 사용
*/

class a
{
  function hello()
  {
    echo "hello";
  }

  private function hello_pr()
  {
    echo "hello";
  }

  protected function hello_pro()
  {
    echo "hello";
  }

  public function hello_pub()
  {
    $this -> hello_pro();
  }
}

class b extends a
{
}

$b = new b;
$b -> hello();  // 당연히 상속 메소드 사용 가능.
$b -> hello_pr(); // 당연히 private는 사용 불가능.

// 여러개의 클래스에 하나의 클래스 상속 가능.
$a = new a;
$a -> hello_pro();  // 이건 안됨;
$a -> hello_pub();  // 이건 돌려서 함수 실행 가능</pre>
<hr>
<?php
/*
  chapter 105-5~9. 상속

  class className extends className2
  - 자바랑 똑같음.
  - 싸잡아서 하는것 별로지만, 상속의 개념을 그대로 사용
*/

class a
{
  function hello()
  {
    echo "hello";
  }

  private function hello_pr()
  {
    echo "hello";
  }

  protected function hello_pro()
  {
    echo "hello";
  }

  public function hello_pub()
  {
    $this -> hello_pro();
  }
}

class b extends a
{
}

$b = new b;
$b -> hello();  // 당연히 상속 메소드 사용 가능.
$b -> hello_pr(); // 당연히 private는 사용 불가능.

// 여러개의 클래스에 하나의 클래스 상속 가능.
$a = new a;
$a -> hello_pro();  // 이건 안됨;
$a -> hello_pub();  // 이건 돌려서 함수 실행 가능

?>
