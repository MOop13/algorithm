<?php

    $c = '2019-06-22T23:59:59Z';
    $a = handleTimeTrans($c);
    $b = date('Y-m-d H:i:s', time());
    var_dump($a,$b);
    var_dump('     ');
    if ($a>$b) {
        echo 'a>b';
    } else {
        echo 'a<b';
    }




    function handleTimeTrans($timeArg) {
        if (!empty($timeArg)) {
            $timeArgNew = date('Y-m-d H:i:s',strtotime($timeArg));
            return $timeArgNew;
        }else {
            return 0;
        }
    }
