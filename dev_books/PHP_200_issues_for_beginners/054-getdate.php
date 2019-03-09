<pre>
  /*
    chapter 54. 현재 시간 정보를 배열로 확인

    현재 시간의 정보를 배열로 리턴 받으려면 getdate()를 사용
    getdate();
  */
  $nowTime = getdate();
  //예제는 일일이 echo 써서 확인하는데,, 난 그러고싶지가 않다;
  echo '<pre>';
  // echo var_dump($nowTime);
  echo print_r($nowTime, true);
  echo '</pre>';
  // 새로고침 하면 getdate 때문에 실시간으로 정보가 바뀜을 확인 할 수 있음.

</pre>
<hr>
<?php
/*
  chapter 54. 현재 시간 정보를 배열로 확인

  현재 시간의 정보를 배열로 리턴 받으려면 getdate()를 사용
  getdate();
*/
$nowTime = getdate();
//예제는 일일이 echo 써서 확인하는데,, 난 그러고싶지가 않다;
echo '<pre>';
// echo var_dump($nowTime);
echo print_r($nowTime, true);
echo '</pre>';
// 새로고침 하면 getdate 때문에 실시간으로 정보가 바뀜을 확인 할 수 있음.

?>
