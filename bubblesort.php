<?php 

    $arr= array(6,3,8,2,9,1);
    var_dump($arr);
    $res =  bubble($arr);
    var_dump($res);
    function bubble($arr){
        $count = count($arr);
        $temp = 0; 
        //外层控制排序轮次
        for($i=0; $i<$count-1; $i++){
            //内层控制每轮比较次数
            for($j=0; $j< $count-1-$i; $j++){
                if($arr[$j] > $arr[$j+1]){
                    $temp        = $arr[$j];
                    $arr[$j]     = $arr[$j+1];
                    $arr[$j+1]   = $temp;
                }
            }
        } 
        return $arr;
    }     



