<pre>
  /*
    chapter 90. readdir()목록을 처음으로 되돌리기;

    rewinddir( 열려있는 폴더 )
    아마 폴더를 사용하고나면, 포인터가 젤 마지막 파일을 향하고있을테니 그 포인터 옮기는거 아닐까.
  */
  $folderName = './';
  $opendir = opendir( $folderName );
  if( $opendir )
  {
    echo readdir( $opendir ).'<br />';
    echo readdir( $opendir ).'<br />';
    echo readdir( $opendir ).'<br />';

    rewinddir( $opendir );
    echo "<hr>rewinddir<hr>";

    echo readdir( $opendir ).'<br />';
    echo readdir( $opendir ).'<br />';
    echo readdir( $opendir ).'<br />';
  } // opendir만 사용해도 포인터가 한칸씩 움직이는거보니, opendir 자체도 포인터고, 요전에 썼던 readdir도 포인터네;
  //설명이 좀 빈약하므로 dir함수들 차이점 찾아볼것.
</pre>
<hr>
<?php
/*
  chapter 90. readdir()목록을 처음으로 되돌리기;

  rewinddir( 열려있는 폴더 )
  아마 폴더를 사용하고나면, 포인터가 젤 마지막 파일을 향하고있을테니 그 포인터 옮기는거 아닐까.
*/
$folderName = './';
$opendir = opendir( $folderName );
if( $opendir )
{
  echo readdir( $opendir ).'<br />';
  echo readdir( $opendir ).'<br />';
  echo readdir( $opendir ).'<br />';

  rewinddir( $opendir );
  echo "<hr>rewinddir<hr>";

  echo readdir( $opendir ).'<br />';
  echo readdir( $opendir ).'<br />';
  echo readdir( $opendir ).'<br />';
} // opendir만 사용해도 포인터가 한칸씩 움직이는거보니, opendir 자체도 포인터고, 요전에 썼던 readdir도 포인터네;
//설명이 좀 빈약하므로 dir함수들 차이점 찾아볼것.
?>
