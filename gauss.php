<?php
// 求1到n的和
include('./json.php');
$sum=0;
$arr = [];
$max = $argv[1];
for ($i=1;$i<=$max;$i++){
    $sum+=$i;
}

//var_dump($arr);exit;
$data = array(
    'sum' => $sum,
);
$res = showJsonRes( 0,  $data); 

//print_r($res);
//print_r( "<br/>");
//print_r( "质数和为：".$sum);
