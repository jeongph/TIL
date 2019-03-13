<pre>
  /*
    chapter 96. 파일의 내용을 한 라인씩 읽기

    fgets( 열린 파일, '불러올 용량' );
  */
  $fileName = 'helloworld.txt';

  if( file_exists( $fileName ))
  {
    $fopen = fopen( $fileName, 'r' );

    // 읽어올 용량 설정 상황에 따라 다른 값을 넣어야 한다네.
    $readByte = 512;
    if( $fopen )
    {
      while( ($fgets = fgets( $fopen, $readByte )))
      {
        echo $fgets."<br>";
      }
    }
  }
</pre>
<hr>
<?php
/*
  chapter 96. 파일의 내용을 한 라인씩 읽기

  fgets( 열린 파일, '불러올 용량' );
*/
$fileName = 'helloworld.txt';

if( file_exists( $fileName ))
{
  $fopen = fopen( $fileName, 'r' );

  // 읽어올 용량 설정 상황에 따라 다른 값을 넣어야 한다네.
  $readByte = 512;
  if( $fopen )
  {
    while( ($fgets = fgets( $fopen, $readByte )))
    {
      echo $fgets."<br>";
    }
  }
}
?>
