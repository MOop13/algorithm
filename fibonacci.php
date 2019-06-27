<?php

function fibonacci($n){
    if ($n == 0){
        $sum = 0;
        return $sum;
    }
    if ($n == 1){
        $sum = 1;
        return $sum;
    }
    if ($n > 1){
        $sum = fibonacci($n-1)+fibonacci($n-2);
        return $sum;
    }
}

$n = fibonacci(25);
var_dump( $n) ;
