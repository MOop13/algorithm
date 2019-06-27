<?php 
// 查找缺少的数字

$arr = array(1,2,3,4,5,6,7,8,9,10,11,12,14,15,16,17,18);

$max = max($arr);
$min = min($arr);
$middle = ($max+$min)/2;
$count = count($arr);
//var_dump($max,$min,$middle,$count);
$sum = 0;
for ($i=0; $i<$count; $i++){
    $sum = $arr[$i] +$sum;
}
$mul = $middle *($count+1);

$absence = $mul - $sum;

//var_dump('max is '.$max, 'min is '.$min,'middle is '.$middle,'count is '.$count, 'mul is '.$mul,'sum is '.$sum,'absence is '.$absence);
echo json_encode(
        array(
            'max' => $max,
            'min' => $min,
            'middle' => $middle,
            'count' => $count,
            'sum' => $sum,
            'absence' => $absence,
        )
    );
s
