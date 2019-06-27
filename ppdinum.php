<?php

function PPDI ($arg) {
    $arr = str_split($arg);
    $n = count($arr);
    $sum =0;
    for ($i =0; $i<$n; $i++){
        $sum += $arr[$i] * $arr[$i] * $arr[$i]; 
    }
    if($sum == $arg){
        return True;
    }else{
        return False;
    }
}

$P = array();
for ($n = 100; $n++; $n<999){
    if (PPDI($n) == True){
        $P[] = $n;
    }
}
print_r($P);

?>

