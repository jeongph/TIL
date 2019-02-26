<?php

/*
 * chapter 15. 배열의 구조 보기 var_dump();
 *
 * // var_dump() 사용 방법
 * var_dump(변수명);
 *
 * // pre 태그와 함께 var_dump() 사용 방법
 * echo '<pre>';
 * var_dump(배열 변수명);
 * echo'</pre>';
 *
 * // 참고로 pre는 HTML에서도 소스에 공백을 그대로 표시.
 * */

$dr = array();
$dr['continent'] = array();

$dr['continent']['america'] = array();
$dr['continent']['america'][0] = "애너 하임";
$dr['continent']['america'][1] = "올랜도";

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = "우라야스";
$dr['continent']['asia'][1] = "홍콩";
$dr['continent']['asia'][2] = "상하이";

$dr['continent']['europe'] = array();
$dr['continent']['europe'][0] = "파리";

echo "<pre>";
var_dump($dr);
echo "</pre>";

?>