<pre>
  /*
    chapter 88. 폴더 읽기

    readdir( 열린 폴더명 );
    열고.. 읽는건 뭐여.. 사용 보니까 리눅스 ls랑 같은건가
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
  chapter 88. 폴더 읽기

  readdir( 열린 폴더명 );
  열고.. 읽는건 뭐여.. 사용 보니까 리눅스 ls랑 같은건가
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
