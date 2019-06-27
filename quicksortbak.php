<?php
    // quicksort
    // rawarrary
    echo "<pre>";
    $arr = array(7,5,9,6,1,3,8,4,2);
    print_r($arr);
    // quicksort
    function quick_sort($arr) {
        if(!is_array($arr)) return false;
        $length = count($arr);
        if($length <= 1) return $arr;
        $left = $right = array(); 
        for($i =1; $i<$length; $i++){
            if($arr[$i]<$arr[0]){
                $left[] = $arr[$i];
            }else {
                $right[] = $arr[$i];
            }
        }

        $left = quick_sort($left);
        $right = quick_sort($right);

        return array_merge($left, array($arr[0]), $right);

    }

    echo "<pre>";
    print_r(quick_sort($arr));
