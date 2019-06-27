<?php 
// 手机号正则匹配
   function checkMobile($str) { 
        $g = "/^1[34578]\d{9}$/";
        if (preg_match($g,$str)) { 
            Return true; 
        }else { 
            Return false; 
        } 
    } 

  //调用函数 
  $str = checkMobile("15800000001"); 
   if($str) 
   { 
   echo("符合手机号码标准"); 
   } 
   else 
   { 
   echo("不符合手机号码标准"); 
   } 
  ?> 
