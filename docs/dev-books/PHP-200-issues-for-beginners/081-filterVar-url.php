<pre>
  function checkUrl( $url )
  {
    $urlCheck = filter_Var( $url, FILTER_VALIDATE_URL );

    $returnInfo = false;
    if( $urlCheck )
    {
      $returnInfo = true;
    }

    return $returnInfo;
  }

  $url = "https://blog.bin-e.me";

  if( checkUrl( $url ))
  {
    echo "올바른 URL";
  }
  else
  {
    echo "잘못된 URL";
  }
  echo "<br>";

  $url = "www.everdevel.com";

  if( checkUrl( $url ))
  {
    echo "올바른 URL";
  }
  else
  {
    echo "잘못된 URL";
  }
</pre>
<hr>
<?php
/*
  chapter 81. filter_Var() 함수로 URL 유효성 검사하기.

  filter_Var( 검사할 값, FILTER_VALIDATE_URL );

*/

function checkUrl( $url )
{
  $urlCheck = filter_Var( $url, FILTER_VALIDATE_URL );

  $returnInfo = false;
  if( $urlCheck )
  {
    $returnInfo = true;
  }

  return $returnInfo;
}

$url = "https://blog.bin-e.me";

if( checkUrl( $url ))
{
  echo "올바른 URL";
}
else
{
  echo "잘못된 URL";
}
echo "<br>";

$url = "www.everdevel.com";

if( checkUrl( $url ))
{
  echo "올바른 URL";
}
else
{
  echo "잘못된 URL";
}
?>
