<pre>
        /*
     * chapter 32. for문 속 for 반복문
     *
     * 2중 반복문을 사용 할 수 있음을 알려줌
     * 다른 언어와 동일.
     * */

    for( $i = 1; $i <= 3; $i++ )
    {
        echo "외부 for : {$i} <br>";

        for( $j = 1; $j <= 3; $j++ )
        {
            echo "\t내부 for : {$j} <br>";
        }

        echo '<br>';
    }
</pre>
<hr>
<?php
    /*
     * chapter 32. for문 속 for 반복문
     *
     * 2중 반복문을 사용 할 수 있음을 알려줌
     * 다른 언어와 동일.
     * */

    for( $i = 1; $i <= 3; $i++ )
    {
        echo "외부 for : {$i} <br>";

        for( $j = 1; $j <= 3; $j++ )
        {
            echo "\t내부 for : {$j} <br>";
        }

        echo '<br>';
    }

?>
