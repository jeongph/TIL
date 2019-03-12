<pre>
  /*
    chapter 85. 폴더 만들기

    mkdir(폴더명, 권한);
    별게 다되네.....
  */
  $folderName = 'hello';
  $makeDir = mkdir( $folderName, '755');
  if( $makeDir )
  {
    echo "폴더 생성 완료.";

  }
  else
  {
    echo "폴더 생성 실패.";
  }
</pre>
<hr>
<?php
/*
  chapter 85. 폴더 만들기

  mkdir(폴더명, 권한);
  별게 다되네.....
*/
$folderName = '../hello'; // 오.. 상대경로도 가능;
$makeDir = mkdir( $folderName, '755');
if( $makeDir )
{
  echo "폴더 생성 완료.";

}
else
{
  echo "폴더 생성 실패.";
}
?>
