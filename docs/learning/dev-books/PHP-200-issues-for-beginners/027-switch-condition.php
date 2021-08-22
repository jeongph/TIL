<pre>
  $age = 24;

  switch($age)
  {
    case ( $age >= 10 && $age <= 19 ):
      echo "10대 입니다.";
    break;

    case ( $age >= 20 && $age <= 29 ):
      echo "20대 입니다.";
    break;

    case ( $age >= 30 && $age <= 39 ):
      echo "30대 입니다.";
    break;
  }
</pre>
<hr>
<?php

/*
  chapter 27. switch문의 case문에 조건 사용하기

  switch문의 case에 조건 적용하기
  switch(변수)
  {
    case(조건):
    break;
  }

  // 골때린다.. 조건도 들어가네
*/

$age = 24;

switch($age)
{
  case ( $age >= 10 && $age <= 19 ):
    echo "10대 입니다.";
  break;

  case ( $age >= 20 && $age <= 29 ):
    echo "20대 입니다.";
  break;

  case ( $age >= 30 && $age <= 39 ):
    echo "30대 입니다.";
  break;
}

 ?>
