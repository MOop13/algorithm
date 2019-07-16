<?php

$start_money = $argv[1];
$day = $argv[2];
$rate = $argv[3];
$select = $argv[4];
$sum = 0;
$invest_money = $start_money;

switch ($select) {
    case 1 :
        for($i = 0; $i< $day; $i++){
            $income = $invest_money * $rate;
            $sum += $income;
            $invest_money = $sum/2;
            $sum = $sum/2;
        }
        break;
    case 2 :
        for($i = 0; $i< $day; $i++){
            $income = $invest_money * $rate;
            $invest_money = $income;
            $sum = $income;
        }
        break;
}
$result = array(
    'start_money' => $start_money,
    'day' => $day,
    'rate' => $rate,
    'sum' => $sum,
);
echo json_encode($result);
