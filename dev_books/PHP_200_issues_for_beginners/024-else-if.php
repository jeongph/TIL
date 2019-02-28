<pre>
  /*
    chapter 24. else문에 if문 사용하기
    // 당연하듯 else if문도 있고 동일하다.
  */

  $gender = 'girl';
  $likePlace = 'Universal Studio'; // 왜 위엔 작은따옴표로, 아랜 큰따옴표로 했지?

  if ( $gender == 'girl' && $likePlace == 'disney land')
  {
    echo "소녀는 디즈니를 좋아합니다.";
  }
  else if ( $gender == 'girl' && $likePlace == 'Universal Studios')
  {
    echo "아닙니다. 유니버셜 스튜디오를 좋아합니다.";
  }
  else {
    echo "소녀는 아무것도 좋아하지 않습니다.";
  }
</pre>
<hr>
<?php
/*
  chapter 24. else문에 if문 사용하기
  // 당연하듯 else if문도 있고 동일하다.
*/

$gender = 'girl';
$likePlace = 'Universal Studio'; // 왜 위엔 작은따옴표로, 아랜 큰따옴표로 했지?

if ( $gender == 'girl' && $likePlace == 'disney land')
{
  echo "소녀는 디즈니를 좋아합니다.";
}
else if ( $gender == 'girl' && $likePlace == 'Universal Studios')
{
  echo "아닙니다. 유니버셜 스튜디오를 좋아합니다.";
}
else {
  echo "소녀는 아무것도 좋아하지 않습니다.";
}
 ?>
