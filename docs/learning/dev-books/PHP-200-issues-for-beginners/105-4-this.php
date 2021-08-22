<pre>
  /*
    chapter 105-4. this
  */
  class pen
  {
    public $color = ''; // 필드변수에 값을주는 멍청한짓은 하지말길.

    function __construct( $c )
    {
      $this -> color = $c;
    }

    public function write( )
    {
      echo "color = {$this->color}";
    }
  }

  $pen1 = new pen("blue");
  $pen1->write();
</pre>
<hr>
<?php
/*
  chapter 105-4. this
*/
class pen
{
  public $color = ''; // 필드변수에 값을주는 멍청한짓은 하지말길.

  function __construct( $c )
  {
    $this -> color = $c;
  }

  public function write( )
  {
    echo "color = {$this->color}";
  }
}

$pen1 = new pen("blue");
$pen1->write();
?>
