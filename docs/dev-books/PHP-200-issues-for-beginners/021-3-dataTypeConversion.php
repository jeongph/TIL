<pre>
$double = 86.4;
echo "데이터형 변경 전의 데이터형 ".gettype($double)."<br>";

$double = (int) $double;
echo "데이터형 변경 후의 데이터형 ".gettype($double)."값 = {$double}";
// 당연하지만 정수로 변환하면 소수점 이하는 다날아감
</pre>
<hr>

<?php
$double = 86.4;
echo "데이터형 변경 전의 데이터형 ".gettype($double)."<br>";

$double = (int) $double;
echo "데이터형 변경 후의 데이터형 ".gettype($double)."값 = {$double}";
// 당연하지만 정수로 변환하면 소수점 이하는 다날아감
?>