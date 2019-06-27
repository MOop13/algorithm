<?php
     
     function order($arr){
      //定义中间变量
      $temp = 0;
       $count = count($arr);
       for($i=0; $i<$count-1; $i++){
          //定义最小位置
           $minIndex = $i;
          for($j= $i+1; $j<$count; $j++){
             if($arr[$j] < $arr[$minIndex]){
                 $minIndex = $j;
             }
         }
         if($i != $minIndex){
               $temp = $arr[$i];
               $arr[$i] = $arr[$minIndex];
               $arr[$minIndex] = $temp;
               
        }
     }
      return $arr;

    }   
$arr = array(6, 3, 8, 2, 9, 1);     
var_dump($arr);
$res = order($arr);
var_dump($res );
