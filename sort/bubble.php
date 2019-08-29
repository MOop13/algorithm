<?php
//初始化数组
$a = [3,5,1,9,2,6,4,8,7];
$length = count($a);
//升序
for ($i = 0; $i < $length - 1; $i++) {
    $flag = false;
    for ($j = 0; $j < $length - 1 - $i; $j++) {
        if ($a[$j] > $a[$j+1]) {
            list($a[$j], $a[$j+1]) = [$a[$j+1], $a[$j]];
            $flag = true;
        }
    }
    if (!$flag) break;
}
for ($i = 0; $i < $length; $i++) {
    echo $a[$i]." ";
}

