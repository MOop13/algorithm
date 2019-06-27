<?php
// 内置函数
function factorial($n){
    return array_product(range(1,$n));
}

// 递归
function factorial_rec($n){
    if( $n >1 ){
        $res = $n * factorial_rec( $n -1 );
    }else{
        $res = 1;
    }
    return $res;
}

echo "7的阶乘 =". factorial_rec(7)."\n";
echo "10的阶乘=". factorial(10)."\n";
