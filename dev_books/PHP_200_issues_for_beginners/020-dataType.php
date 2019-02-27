<pre>
$num = 12;
echo "\$num의 데이터형 (값 {$num})은 ".getttype($num);
echo "<br>";

$greeting = "안녕";
echo "\$greeting의 데이터형 (값 {$greeting}) 은".gettype($greeting);
echo "<br>";

$numStr = "121212";
echo "\$numStr의 데이터형 (값 {$numStr})은 ".gettype($numStr);
echo "<br>";

$fruit = array();
echo "\$fruit의 데이터형은 ".gettype($fruit);
echo "<br>";

$nai = null;
echo "\$nai의 데이터형 (값 {$nai})은 ".gettype($nai);
echo "<br>";

$boolean = true;
echo "\$boolean의 데이터형 (값 {$boolean})은 ".gettype($boolean);
</pre>
<hr>

<?php

/*
 * chapter 20. 데이터형
 *
 * php 프로그래밍 언어에서 사용하는 데이터형
 *
 * */

$num = 12;
echo "\$num의 데이터형 (값 {$num})은 ".getttype($num);
echo "<br>";

$greeting = "안녕";
echo "\$greeting의 데이터형 (값 {$greeting}) 은".gettype($greeting);
echo "<br>";

$numStr = "121212";
echo "\$numStr의 데이터형 (값 {$numStr})은 ".gettype($numStr);
echo "<br>";

$fruit = array();
echo "\$fruit의 데이터형은 ".gettype($fruit);
echo "<br>";

$nai = null;
echo "\$nai의 데이터형 (값 {$nai})은 ".gettype($nai);
echo "<br>";

$boolean = true;
echo "\$boolean의 데이터형 (값 {$boolean})은 ".gettype($boolean);

?>