<?php
// 쓸때없이 파일명이 어려워..

/*
 * chapter 12. 배열 인덱스를 문자로 적용
 *
 * // 인덱스를 문자로 사용하는 법 -> 요게좀 많이 쓰일듯
 * 변수명['index'] = 값;
 * */

// earth['test' = '';

// 배열 선언
$earth = array();

// earth의 nation 인덱스에 korea 대입
$earth['nation'] = 'korea';
// 경험상 $earth = array( 'nation' => 'korea' ); 로 더 많이 씀.

// earth 배열의 nation 인덱스 출력
echo 'earth[\'nation\'] = '.$earth['nation'];

// round(숫자, 자릿수);
// 갑자기 round가 왜나오는지 모르겠지만, 반올림 함수로, args[0]의 값을 자릿수만큼 반올림(음수로 하면 1자리 이상도 반올림 된다)

?>

