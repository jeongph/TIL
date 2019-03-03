<pre></pre>
<hr>
<?php
/*
 * chapter 32. 이어서
 * */

for( $i = 1; $i <= 3; $i++ )
{
    echo "{$i}단 <br>";

    for( $j = 1; $j <= 3; $j++ )
    {
        $mul = $i * $j;
        echo "{$i} * {$j} = {$mul} <br>";
    }

    echo '<br>';
}

?>
