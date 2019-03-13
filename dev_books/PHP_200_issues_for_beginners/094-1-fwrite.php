<pre>
  /*
    chapter 94. 파일 쓰기

    fwrite( 파일포인터, 파일에 쓸 내용 );
    C언어랑 똑같음.
  */
  $content = "Hello World!";

  $fileName = "helloworld.txt";

  $fp = fopen( $fileName, 'w' );

  $fw = fwrite( $fp, $content );

  if( $fw == false )  // 이게 뭔 의미가 있냐..? 그냥 fw라고 쓰면되는디
  {
    echo "파일 쓰기에 실패";
  }
  else
  {
    echo "파일 쓰기 완료";
  }

  fclose( $fp );
</pre>
<hr>
<?php
/*
  chapter 94. 파일 쓰기

  fwrite( 파일포인터, 파일에 쓸 내용 );
  C언어랑 똑같음.
*/
$content = "Hello World!";

$fileName = "helloworld.txt";

$fp = fopen( $fileName, 'w' );

$fw = fwrite( $fp, $content );

if( $fw == false )  // 이게 뭔 의미가 있냐..? 그냥 fw라고 쓰면되는디
{
  echo "파일 쓰기에 실패";
}
else
{
  echo "파일 쓰기 완료";
}

fclose( $fp );
?>
