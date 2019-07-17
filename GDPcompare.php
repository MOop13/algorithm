<?php 

$china = $argv[1];
$rate1 = $argv[2];
$usa = $argv[3];
$rate2 = $argv[4];

$year = 2019;

while ($china * $rate1 <  ($usa * $rate2)*0.8 ){
    $china = $china * $rate1;
    $usa   = $usa   * $rate2;
    $year++;
    echo "year: ".$year. " china: ". $china . " usa :". $usa. "\n";
}

