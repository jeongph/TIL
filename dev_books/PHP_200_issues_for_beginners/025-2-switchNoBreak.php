<pre>
  // 이건 솔찍히 예제가 잘못됐다. break;없었을때 망하는거 보여주려면 다뺐을때 최고다;

  $likeCharacter = 'mickey';

  switch($likeCharacter)
  {
    case 'mickey':
    echo '미키';

    case 'm';
    echo '미니';

    case 's':
    echo '스텔라루';

    case 'd':
    echo '더피';

    default :
    echo '좋아하는게 없습니다';  //아는 캐릭터가 없어서 원래 이럼 안되는데 'm', 's' 이렇게 썼다.
    break;
  }
<hr>
<?php
// 이건 솔찍히 예제가 잘못됐다. break;없었을때 망하는거 보여주려면 다뺐을때 최고다;

$likeCharacter = 'mickey';

switch($likeCharacter)
{
  case 'mickey':
  echo '미키';

  case 'm';
  echo '미니';

  case 's':
  echo '스텔라루';

  case 'd':
  echo '더피';

  default :
  echo '좋아하는게 없습니다';  //아는 캐릭터가 없어서 원래 이럼 안되는데 'm', 's' 이렇게 썼다.
  break;
}
 ?>
