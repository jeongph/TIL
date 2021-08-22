<pre>
  /*
    chapter 86. 폴더 존재 유무 확인

    is_dir(폴더명);
    당연히 앞에 is붙으면 뭐 확인
  */
  $folderName = 'hello';  // 이전예제인데 지움;
  $isDir = is_dir( $folderName );

  if( $isDir )
  {
      echo "폴더가 있습니다.";
  }else {
    echo "폴더가 없습니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 86. 폴더 존재 유무 확인

  is_dir(폴더명);
  당연히 앞에 is붙으면 뭐 확인
*/
$folderName = 'hello';  // 이전예제인데 지움;
$isDir = is_dir( $folderName );

if( $isDir )
{
    echo "폴더가 있습니다.";
}else {
  echo "폴더가 없습니다.";
}
?>
