<?php

/*
 * 대입 연산자
 * +=, -=, *=, /=, %=은 다른 언어랑 동일. 단, .=이 있음.
 *
 */

// += 연산자
$num = 10;
$num += 2;
echo "num = ".$num;
echo "<br>";

// -=
$num = 10;
$num -= 2;
echo "num = ".$num;
echo "<br>";

// *=
$num = 10;
$num *= 2;
echo "num = ".$num;
echo "<br>";

// /=
$num = 10;
$num /= 2;
echo "num = ".$num;
echo "<br>";

// %=
$num = 10;
$num %= 3;
echo "num = ".$num;
echo "<br>";

// .=
$city = '서울';
$city .= '특별시';
echo "city".$city;

?>