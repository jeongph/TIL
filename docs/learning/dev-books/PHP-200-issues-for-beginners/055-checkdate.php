<pre>
  /*
    chapter 55. 날짜값이 유효한지 확인

    checkdate()함수가 있다. 날짜가 유효하면 true를 아니면 false를 반환.
    checkdate(월, 일, 년);

    유효하다는게 그 날짜가 존재하는지 여부 같다.
  */
  $isDateCheck = checkdate(3, 32, 2019);

  if( $isDateCheck)
  {
    echo "유효한 날짜";
  }
  else {
    echo "유효하지 않은 날짜";
  }
  // 골때리네.. 현재야 당연히 32일이 있을리가 없지만 어느 시대에 나타날지도 모르지않나
  // 날짜 입력시에 체크할라고 만들어놓은 함수같은데 이건 거의 프레임워크 수준;
</pre>
<hr>
<?php
/*
  chapter 55. 날짜값이 유효한지 확인

  checkdate()함수가 있다. 날짜가 유효하면 true를 아니면 false를 반환.
  checkdate(월, 일, 년);

  유효하다는게 그 날짜가 존재하는지 여부 같다.
*/
$isDateCheck = checkdate(3, 32, 2019);

if( $isDateCheck)
{
  echo "유효한 날짜";
}
else {
  echo "유효하지 않은 날짜";
}
// 골때리네.. 현재야 당연히 32일이 있을리가 없지만 어느 시대에 나타날지도 모르지않나
// 날짜 입력시에 체크할라고 만들어놓은 함수같은데 이건 거의 프레임워크 수준;
?>
