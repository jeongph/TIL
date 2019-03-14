<pre>
  /*
    chapter 105-3.
  */
  class pen
  {
    public $color;
    public $bold;
    public $price;

    function __construct( $color, $bold, $price )
    {
      echo "사용중인 펜";
      echo "<br>";
      echo "색 : {$color}";
      echo "<br>";
      echo "두께 : {$bold}";
      echo "<br>";
      echo "가격 : {$price}";
    }

    function __destruct()
    {
      echo "객체 종료";
    }

    public function write( $c )
    {
      echo "{$c}를 쓴다.";
    }
  }

  $pen = new pen("p", "t", "1000");
  echo "<br>";
  $pen -> write("test");  // destruct가 자동 실행되는데, 객체반환을 직접 해줘야 하나 했더니 자바처럼 알아서 가져간다;
</pre>
<hr>
<?php
/*
  chapter 105-3.
*/
class pen
{
  public $color;
  public $bold;
  public $price;

  function __construct( $color, $bold, $price )
  {
    echo "사용중인 펜";
    echo "<br>";
    echo "색 : {$color}";
    echo "<br>";
    echo "두께 : {$bold}";
    echo "<br>";
    echo "가격 : {$price}";
  }

  function __destruct()
  {
    echo "객체 종료";
  }

  public function write( $c )
  {
    echo "{$c}를 쓴다.";
  }
}

$pen = new pen("p", "t", "1000");
echo "<br>";
$pen -> write("test");  // destruct가 자동 실행되는데, 객체반환을 직접 해줘야 하나 했더니 자바처럼 알아서 가져간다;
?>
