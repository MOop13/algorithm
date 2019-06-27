<?php
echo '输入数字为'.$argv[1];

$arr = array();
for($i=0;$i<$argv[1]; $i++){
    array_push($arr,$i+1);
}
var_dump($arr);
for ($i=0; $i< $argv[1] -1; $i++){
    if($i == 0){
        $sum1 = $arr[$i]+$arr[$i+1];
        $sum2 = $arr[$i]+$arr[$argv[1]-1];   
    }
    else if($i == ($argv[1] -1)){
        $sum1 = $arr[$i]+$arr[0];
        $sum2 = $arr[$i]+$arr[$i-1];   
    }else{
        $sum1 = $arr[$i]+$arr[$i+1];
        $sum2 = $arr[$i]+$arr[$i-1]; 
    }
    $s1 = sushu($sum1);
    $s2 = sushu($sum2);
    if($s1 == true && $s2 == true){
        echo true;
    }
}    

  function sushu($number) {
    $sqr = ceil(sqrt($number)-1);
    for($i=1; $i< $sqr; $i++){
        if($number%$i == 0){
            return true;
        }else{
            return false;
        } 
    }
}

?>

