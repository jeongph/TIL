<pre>
  /*
    chapter 89. 폴더 닫기

    closedir( 열린 폴더명 );
    닫기가 역시 나오네..
  */
  $folderName = './';

  //디렉터리 존재 확인
  if( is_dir( $folderName ) )
  {
    echo "폴더는 일단 있고 <br>";
    $opendir = opendir( $folderName );
    if( $opendir )
    {
      echo "폴더를 열었습니다.<hr>";

      while( ($readdir = readdir( $opendir)) )
      {
        echo '<li>'.$readdir.'</li>';
      }
      closedir( $opendir );
    }
    else
    {
      echo "폴더를 못열었습니다.";
    }
  }
  else
  {
    echo "없는 폴더 입니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 89. 폴더 닫기

  closedir( 열린 폴더명 );
  닫기가 역시 나오네..
*/
$folderName = './';

//디렉터리 존재 확인
if( is_dir( $folderName ) )
{
  echo "폴더는 일단 있고 <br>";
  $opendir = opendir( $folderName );
  if( $opendir )
  {
    echo "폴더를 열었습니다.<hr>";

    while( ($readdir = readdir( $opendir)) )
    {
      echo '<li>'.$readdir.'</li>';
    }
    closedir( $opendir );
  }
  else
  {
    echo "폴더를 못열었습니다.";
  }
}
else
{
  echo "없는 폴더 입니다.";
}
?>
