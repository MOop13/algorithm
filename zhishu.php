<?php
// 求100以内质数及和
include('./json.php');
$sum=0;
$arr = [];
for ($i=1;$i<=100;$i++){
    $n=0;
    for ($j=1;$j<$i;$j++){
        if($i%$j==0){
            $n++;
        }
    }
    if ($n==1){
        //print_r( $i.', ');
        $arr[] = $i; 
         $sum+=$i;
    }

}

//var_dump($arr);exit;
$data = array(
    'dataArr' => array($arr),
    'sum' => $sum,

);
$res = showJsonRes( 0,  $data); 

//print_r($res);
//print_r( "<br/>");
//print_r( "质数和为：".$sum);
