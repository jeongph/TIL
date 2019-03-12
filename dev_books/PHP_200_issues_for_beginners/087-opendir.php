<pre>
  /*
    chapter 87. 폴더 열기

    나중에 버퍼로 쓸때 다른 언어처럼 열고 닫아야 하나보다.
  */
  $folderName = './'; // 현재 폴더로 해봄; 그리고 Name이 아니고 주소아니냐..
  $opendir = opendir( $folderName );  // 뭐 함수 쓸때마다 이상한건데 어떤건 하이픈이 있고; 어떤건 없음.. 맘대로임;

  if( $opendir )
  {
    echo "폴더를 열었습니다.";
  }
  else
  {
    // else 자동완성 매우 불편하네..
    echo "폴더를 못 열었습니다.";
  } // 오; 현재폴더도 열리네
</pre>
<hr>
<?php
/*
  chapter 87. 폴더 열기

  나중에 버퍼로 쓸때 다른 언어처럼 열고 닫아야 하나보다.
*/
$folderName = './'; // 현재 폴더로 해봄; 그리고 Name이 아니고 주소아니냐..
$opendir = opendir( $folderName );  // 뭐 함수 쓸때마다 이상한건데 어떤건 하이픈이 있고; 어떤건 없음.. 맘대로임;

if( $opendir )
{
  echo "폴더를 열었습니다.";
}
else
{
  // else 자동완성 매우 불편하네..
  echo "폴더를 못 열었습니다.";
} // 오; 현재폴더도 열리네
?>
