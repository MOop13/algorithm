<?php
$arr = str_split($argv[1]);
var_dump($arr);
$n = count($arr);
$sum =0;
for ($i =0; $i<$n; $i++){
    $sum += $arr[$i] * $arr[$i] * $arr[$i]; 
    var_dump($sum);
}
if($sum == $argv[1]){
    echo 'True';
}else{
    echo 'False';
}
echo $argv[1];
?>

