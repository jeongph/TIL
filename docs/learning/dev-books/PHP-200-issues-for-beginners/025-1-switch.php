<pre>
  /*
    chapter 25. switch 조건문
    // 당연히 switch도 있다.
    // 당연히 쓰는법도 동일하다.
  */

  $likeCharacter = 'mickey';

  switch($likeCharacter)
  {
    case 'mickey':
    echo '미키';
    break;

    case 'm';
    echo '미니';
    break;

    case 's':
    echo '스텔라루';
    break;

    case 'd':
    echo '더피';
    break;  //인간적으로 case 다음 문장은 자동 들여쓰기 해줘야지;

    default :
    echo '좋아하는게 없습니다';  //아는 캐릭터가 없어서 원래 이럼 안되는데 'm', 's' 이렇게 썼다.
    break;
  }
</pre>
<hr>
<?php
/*
  chapter 25. switch 조건문
  // 당연히 switch도 있다.
  // 당연히 쓰는법도 동일하다.
*/

$likeCharacter = 'mickey';

switch($likeCharacter)
{
  case 'mickey':
  echo '미키';
  break;

  case 'm';
  echo '미니';
  break;

  case 's':
  echo '스텔라루';
  break;

  case 'd':
  echo '더피';
  break;  //인간적으로 case 다음 문장은 자동 들여쓰기 해줘야지;

  default :
  echo '좋아하는게 없습니다';  //아는 캐릭터가 없어서 원래 이럼 안되는데 'm', 's' 이렇게 썼다.
  break;
}
 ?>
