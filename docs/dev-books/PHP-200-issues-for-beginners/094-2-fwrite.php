<pre>
  /*
    chapter 94.

    fwrite는 C와 동일하게 fopen 옵션으로 뒤에 이어쓰기도 할 수 있음.
  */
  $content = "이 내용은 앞의 내용 뒤에 붙어 저장 됩니다.";

  $fileName = "helloworld.txt";

  $fp = fopen( './'.$fileName, 'a');  // a옵션으로 열면 이어서 쓰는 옵션
  $fw = fwrite( $fp, $content );

  if( $fw == false )
  {
    echo "파일 쓰기에 실패";
  }
  else
  {
    echo "파일 쓰기 완료";
  }

  fclose( $fp ); // 포인터 개념이 아마 없을텐데 메모리 반환하는거까지 똑같네 컨셉인가
</pre>
<hr>
<?php
/*
  chapter 94.

  fwrite는 C와 동일하게 fopen 옵션으로 뒤에 이어쓰기도 할 수 있음.
*/
$content = "이 내용은 앞의 내용 뒤에 붙어 저장 됩니다.";

$fileName = "helloworld.txt";

$fp = fopen( './'.$fileName, 'a');  // a옵션으로 열면 이어서 쓰는 옵션
$fw = fwrite( $fp, $content );

if( $fw == false )
{
  echo "파일 쓰기에 실패";
}
else
{
  echo "파일 쓰기 완료";
}

fclose( $fp ); // 포인터 개념이 아마 없을텐데 메모리 반환하는거까지 똑같네 컨셉인가
?>
