<pre>
  /*
    chapter 80. 이메일 유효성 검사 filter_var 사용

    filter_Var('검사값', FILTER_VALIDATE_EMAIL);
  */
  function checkEmail( $email )
  {
    $emailCheck = filter_Var( $email, FILTER_VALIDATE_EMAIL );

    $returnInfo = false;
    if( $emailCheck)
    {
      $returnInfo = true;
    }

    return $returnInfo;
  }
    $email = "dnr@test.com";

    if( checkEmail( $email ))
    {
      echo "올바른 이메일";
    }
    else
    {
      echo "잘못된 이메일";
    }
</pre>
<hr>
<?php
/*
  chapter 80. 이메일 유효성 검사 filter_var 사용

  filter_Var('검사값', FILTER_VALIDATE_EMAIL);
*/
function checkEmail( $email )
{
  $emailCheck = filter_Var( $email, FILTER_VALIDATE_EMAIL );

  $returnInfo = false;
  if( $emailCheck)
  {
    $returnInfo = true;
  }

  return $returnInfo;
}
  $email = "dnr@test.com";

  if( checkEmail( $email ))
  {
    echo "올바른 이메일";
  }
  else
  {
    echo "잘못된 이메일";
  }
?>
