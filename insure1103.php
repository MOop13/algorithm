<?php
  // 检测输入类型
    $x_arr = array(
        3000
        ,4500
        ,5100
        ,5400
        ,5400
        ,5700
        ,5700
        ,5700
        ,5700
        ,5700
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0        
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0
        ,0        
    );
    $y_arr = array(
        1.01,1.06,1.14,1.22,1.32,1.44,1.57,1.71,1.87,2.05,2.25,2.47,2.71,2.98,3.28,3.60,3.96,4.35,4.78,5.26,5.78,6.36,6.99,7.69,8.45,9.29,10.21,11.22,12.33,13.55,14.89,16.36,17.97,19.74,21.68,23.80,26.13,28.67,31.46,34.50,37.84,41.47,45.45,49.78,54.50,59.64,65.24,71.32,77.92,85.07,92.81,101.18,110.22,119.95,130.42,141.65,153.68,166.53,180.23,194.80
            );
    $z_arr = array();
    $p_arr = array();
    $q_arr = array();
    $r_arr = array();
    $zsum_arr = array();
    $x_sum = 0;
    $z_sum = 0;
    $m = 120;
    $n = 115;
    $o = 0;
    $temp = 0;
    $total = 120000;
    $list=array();
    $one = array();

    for ($i = 0; $i< count($y_arr) -1; $i++){
        if ($i == 0 ){
            $p_arr[$i] = ($total -$x_arr[$i])/1000 * $y_arr[$i];
            $z_arr[$i] = $x_arr[$i] * 1.044 - $p_arr[$i];
        }else{
            $p_arr[$i] = ($total - $z_arr[$i-1]) * $y_arr[$i]/1000 ;
            $z_arr[$i] = ($z_arr[$i-1] + $x_arr[$i]) * 1.044 - $p_arr[$i];
            //$z_arr[$i] = ($z_sum + $x_arr[$i]) * 1.025 - $p_arr[$i];
        }
        $z_sum += $z_arr[$i];
        if ($i <=9 ){
            array_push($zsum_arr, $z_sum); 
        }
        //array_push($zsum_arr,$z_sum);
        $one = array(
            'z'.$i => $z_arr[$i],
            'p'.$i => $p_arr[$i],
            'x'.$i => $x_arr[$i],
            //'z_sum'.$i => $z_sum
            
        );
        array_push($p_arr,$p_arr[$i]);
        array_push($z_arr,$z_arr[$i]);
        array_push($list, $one);
    }
    
    $z_max = max($z_arr);
    $x_max = max($x_arr);
    echo json_encode(array('list' => $list,
                        //    'z_max' => $z_max,
                        //    'z_sum' => $zsum_arr
                        )
                    );

?>

