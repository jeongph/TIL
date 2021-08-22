<pre>
  /*
  chapter 93. 파일 닫기

  fclose( 열려있는 폴더명 );
  */
  $open = fopen( 'helloworld.txt', 'r+' );
  fclose( $fopen );
</pre>
<hr>
<?php
/*
chapter 93. 파일 닫기

fclose( 열려있는 폴더명 );
*/
$open = fopen( 'helloworld.txt', 'r+' );
fclose( $fopen );

?>
