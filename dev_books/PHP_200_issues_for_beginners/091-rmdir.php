<pre>
  /*
    chapter 91. 폴더 삭제.

    rmdir( 폴더명 );

    rmdir도 있다..
  */
  rmdir('hello');

  if( is_dir('hello') )
  {
    echo "hello 폴더가 있습니다.";
  }
  else
  {
    echo "폴더가 없습니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 91. 폴더 삭제.

  rmdir( 폴더명 );

  rmdir도 있다..
*/
rmdir('hello');

if( is_dir('hello') )
{
  echo "hello 폴더가 있습니다.";
}
else
{
  echo "폴더가 없습니다.";
}
?>
