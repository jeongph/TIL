<pre></pre>
<hr>
<?php
/*
 * chapter 33 이어서
 * */

$memberList[0] = ['name' => '미우', 'id' => 'miu'];
$memberList[1] = ['name' => '유나', 'id' => 'yuna'];
$memberList[2] = ['name' => '민후', 'id' => 'minhoo'];
$memberList[3] = ['name' => '해윤', 'id' => 'haeyun'];

foreach( $memberList as $index => $value )
{
    foreach( $value as $index2 => $value2 )
    {
        if( $index2 == 'name')
        {
            echo "{$value2} 아이디 : ";
        }

        if( $index2 == 'id' )
        {
            echo "{$value2} 입니다."; //뭔 예제가 이래..
        }

    }
    echo '<br><br>';
}
?>
