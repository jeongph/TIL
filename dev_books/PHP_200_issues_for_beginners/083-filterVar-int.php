<pre>
  /*
    chapter 83. filter_var로 정수 유효성 검사

    filter_Var( 검사값, FILTER_VALIDATE_INT );

  */
  function checkInt( $int )
  {
    $intCheck = filter_Var( $int, FILTER_VALIDATE_INT );
    if( $intCheck )
    {
      echo "정수입니다.";
    }
    else
    {
      echo "정수가 아닙니다.";
    }
    echo "<br>";
  }

  checkInt(60);
  checkInt(1.1);
  checkInt("HELLO");
  checkInt('a');    //캐릭터 개념 자체가 없는듯
  checkInt(true);   // ㅋㅋㅋㅋ왜 bool 값은 정수라고뜨냐..?! 내부적으로 1로 되어있나보네

</pre>
<hr>
<?php
/*
  chapter 83. filter_var로 정수 유효성 검사

  filter_Var( 검사값, FILTER_VALIDATE_INT );

*/
function checkInt( $int )
{
  $intCheck = filter_Var( $int, FILTER_VALIDATE_INT );
  if( $intCheck )
  {
    echo "정수입니다.";
  }
  else
  {
    echo "정수가 아닙니다.";
  }
  echo "<br>";
}

checkInt(60);
checkInt(1.1);
checkInt("HELLO");
checkInt('a');    //캐릭터 개념 자체가 없는듯
checkInt(true);   // ㅋㅋㅋㅋ왜 bool 값은 정수라고뜨냐..?! 내부적으로 1로 되어있나보네

?>
