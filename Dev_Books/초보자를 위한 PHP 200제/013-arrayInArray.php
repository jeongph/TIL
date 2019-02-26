<?php

/*
 * chapter 13. 배열에 배열 적용
 * */

// 아마 다차원 배열을 이렇게 표현한것 같다.
// 변수를 배열로 선언
// $earth = array();
// 내부의 항목을 또 변수로 선언 $earth['nation'] = array();

// 변수 dr을 배열로 선언
$dr = array();
// 배열 dr에 continent 인덱스를 생성하고 이것을 배열로 선언
$dr['continent'] = array();

// 배열 dr['continent']에 ['america']인덱스 생성 후 배열로 선언;
$dr['continent']['america'] = array();
$dr['continent']['america'][0] = "애너 하임";
$dr['continent']['america'][1] = "올랜도";

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = "우라야스";
$dr['continent']['asia'][1] = "홍콩";
$dr['continent']['asia'][2] = "상하이";

$dr['continent']['europe'] = array();
$dr['continent']['europe'][0] = "파리";

echo "다음 도시의 공통점은?";
echo "<br><br>";
echo "아메리카 : <br>";
echo $dr['continent']['america'][0]."<br />";
echo $dr['continent']['america'][1]."<br />";

echo "아시아: <br>";
echo $dr['continent']['asia'][0]."<br />";
echo $dr['continent']['asia'][1]."<br />";
echo $dr['continent']['asia'][2]."<br />";

echo "유럽: <br>";
echo $dr['continent']['europe'][0]."<br />";

// 꽤 복잡하게 선언하는거같다.

?>

