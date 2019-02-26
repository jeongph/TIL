<?php

/*
 * chapter 14. 배열에 값 추가하기 array_push();
 *
 * // array_push()함수 사용 방법.
 * array_push(변수명, 배열에 들어갈 값, ...);
 * */

$fruit = array();

array_push($fruit, 'apple', 'banana', 'grape', 'coconut', 'tangerine');
// 다중으로 값이 들어가는지는 처음알았다;

// 내맘대로 for문으로 변경.
for($i = 0; $i < 5; $i++)
{
    echo $fruit[$i].'<br />';
}

?>