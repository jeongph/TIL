<pre>
  /*
    chapter 105. 클래스

    함수를 생성하고 사용.
  */
  class pen
  {
    public $color;
    public $bold;
    public $price;

    public function write( $c )
    {
      echo $c.'를 쓴다.';
    }

    public function draw( $c )
    {
      echo $c.'를 그린다';
    }
  }
  $pen = new pen(); // 생성자의 클래스는 당연히 $가 안붙는것에 주의.
  $pen -> write("book");
</pre>
<hr>
<?php
/*
  chapter 105. 클래스

  함수를 생성하고 사용.
*/
class pen
{
  public $color;
  public $bold;
  public $price;

  public function write( $c )
  {
    echo $c.'를 쓴다.';
  }

  public function draw( $c )
  {
    echo $c.'를 그린다';
  }
}
$pen = new pen(); // 생성자의 클래스는 당연히 $가 안붙는것에 주의.
$pen -> write("book");
?>
