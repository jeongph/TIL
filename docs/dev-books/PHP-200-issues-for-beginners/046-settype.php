<pre>
    /*
 * chapter 46. 변수에 데이터형 강제 적용
 *
 * php자체가 형식에 민감하지가 않다보니까 이런 함수가 존재하는거같음
 *
 * settype을 사용하는데 이게 형변환 대신 사용할 경우가 있음
 * */
$val = "true";
echo "변수 val type = ".gettype($val);    // 당연한거지만 gettype도 있다.

echo '<br>';

settype($val, 'bool'); // 데이터형을 강제 적용
echo "변수 val type = ".gettype($val);

echo '<br>';

var_dump($val); // var dump로 형식, 값 확인
</pre>
<hr>
<?php
/*
 * chapter 46. 변수에 데이터형 강제 적용
 *
 * php자체가 형식에 민감하지가 않다보니까 이런 함수가 존재하는거같음
 *
 * settype을 사용하는데 이게 형변환 대신 사용할 경우가 있음
 * */
$val = "true";
echo "변수 val type = ".gettype($val);    // 당연한거지만 gettype도 있다.

echo '<br>';

settype($val, 'bool'); // 데이터형을 강제 적용
echo "변수 val type = ".gettype($val);

echo '<br>';

var_dump($val); // var dump로 형식, 값 확인
?>
