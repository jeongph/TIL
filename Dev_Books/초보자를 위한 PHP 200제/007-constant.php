<?php

// 상수선언은 define(상수명, 상수값);

// 상수 FAVORITE_DOLL에 값을 대입.
define("FAVORITE_DOLL", "gelatoni");
echo "상수 FAVORITE_DOLL의 값은 : ".FAVORITE_DOLL."<br>";

// 상수 FAVORITE_DOLL에 값 dufft를 다시 대입
define("FAVORITE_DOLL", "duffy");
echo "상수 FAVORITE_DOLL의 값은 : ".FAVORITE_DOLL;

?>