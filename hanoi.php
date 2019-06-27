<?php

static  $s = 0;
function hanoi($n, $p1, $p2, $p3){
    global $s;
    if ( $n == 1) {
        echo "第".++$s."步,盘子".$n."从".$p1."移动到".$p3."\n";
    } else {
        hanoi($n-1,$p1, $p3, $p2);
        echo "第".++$s."步,盘子".$n."从".$p1."移动到".$p3."\n";
        hanoi($n-1,$p2, $p1, $p3);
    }
}

hanoi(7, 1,2,3);
