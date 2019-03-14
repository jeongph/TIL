<pre>
  /*
    chapter 105-10. static

    static function() {}
    호출 : 클래스명::메소드명();
    - 요건 중요하니깐 짚고 넘어감.
    - 호출은 특이하게도 C++을 빌려왔음.
  */

  class hello
  {
    public static function output( $w )
    {
      echo "word : {$w}";
    }
  }

  hello::output("test");
</pre>
<hr>
<?php
/*
  chapter 105-10. static

  static function() {}
  호출 : 클래스명::메소드명();
  - 요건 중요하니깐 짚고 넘어감.
  - 호출은 특이하게도 C++을 빌려왔음.
*/

class hello
{
  public static function output( $w )
  {
    echo "word : {$w}";
  }
}

hello::output("test");
?>
