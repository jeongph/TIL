<pre>
  /*
    chapter 26. else문에 switch 끼얹기
    // 이건 솔찍히 좀 신박하다;;;
    // 이런 문법 첨보는거같은데..?
  */

  // if() {} else switch(변수){} 로 쓸 수 있다고 한다......

  $gender = 'woman';
  $likePlace = 'Universal Studios';

  if ( $gender == 'man')
  {
    echo 'Only woman.';
  }
  else switch ( $likePlace)
  {
    case 'disneyland':
      echo '디즈니랜드 좋아합니다.';
    break;

    case 'disneysea':
      echo '디즈니씨 좋아합니다.';
    break;

    case 'Universal Studios';
      echo '유니버셜 스튜디오 좋아합니다.';
    berak;

    default :
      echo '좋아하는건 없습니다.';
    breka;  // 생각 해도 어짜피 마지막;
  }
</pre>
<hr>
<?php
/*
  chapter 26. else문에 switch 끼얹기
  // 이건 솔찍히 좀 신박하다;;;
  // 이런 문법 첨보는거같은데..?
*/

// if() {} else switch(변수){} 로 쓸 수 있다고 한다......

$gender = 'woman';
$likePlace = 'Universal Studios';

if ( $gender == 'man')
{
  echo 'Only woman.';
}
else switch ( $likePlace)
{
  case 'disneyland':
    echo '디즈니랜드 좋아합니다.';
  break;

  case 'disneysea':
    echo '디즈니씨 좋아합니다.';
  break;

  case 'Universal Studios';
    echo '유니버셜 스튜디오 좋아합니다.';
  break;

  default :
    echo '좋아하는건 없습니다.';
  break;  // 생각 해도 어짜피 마지막;
}
 ?>
