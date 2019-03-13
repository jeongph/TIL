<pre>
  /*
    chapter 95. 파일 내용 읽기

    fread( 파일 포인터, 불러올 용량);
    filesize( "파일 경로를 포함한 파일명" );
    files_exists( 파일명 );  // 파일이 존재하면 t, 아니면 f
  */
  $fileName = 'helloworld.txt';

  if( file_exists( $fileName ))
  {
    $fopen = fopen( $fileName, 'r' );

    if( $fopen )
    {
      $fread = fread( $fopen, filesize( $fileName ));

      if( $fread )
      {
        echo $fread;
        fclose( $fopen );
      } else echo "파일 읽기에 실패";
    } else echo "파일 열기에 실패";
  }else echo "존재하지 않는 파일";
</pre>
<hr>
<?php
/*
  chapter 95. 파일 내용 읽기

  fread( 파일 포인터, 불러올 용량);
  filesize( "파일 경로를 포함한 파일명" );
  files_exists( 파일명 );  // 파일이 존재하면 t, 아니면 f
*/
$fileName = 'helloworld.txt';

if( file_exists( $fileName ))
{
  $fopen = fopen( $fileName, 'r' );

  if( $fopen )
  {
    $fread = fread( $fopen, filesize( $fileName ));

    if( $fread )
    {
      echo $fread;
      fclose( $fopen );
    } else echo "파일 읽기에 실패";
  } else echo "파일 열기에 실패";
}else echo "존재하지 않는 파일";
?>
