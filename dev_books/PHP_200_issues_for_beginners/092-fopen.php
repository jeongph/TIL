<pre>
  /*
    chapter 92. 파일 열기

    fopen( "파일 경로를 포함한 파일명"", 옵션 );
    fopen도 있네.. 사용은 C와 동일
  */
  $fopen = fopen( 'helloworld.txt', 'r+' );

  if( $fopen )
  {
    echo "파일을 열었습니다.";
  }
  else
  {
    echo "파일을 여는데 실패 했습니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 92. 파일 열기

  fopen( "파일 경로를 포함한 파일명"", 옵션 );
  fopen도 있네.. 사용은 C와 동일
*/
$fopen = fopen( 'helloworld.txt', 'r+' );

if( $fopen )
{
  echo "파일을 열었습니다.";
}
else
{
  echo "파일을 여는데 실패 했습니다.";
}

?>
