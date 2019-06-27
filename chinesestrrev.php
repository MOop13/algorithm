<?php
    header("Content-type:text/html;charset=utf-8");
    $s="这是一段中文字符！";
                              
    function str_rev($str){
        //先判断参数是否为字符串，且为UTF8编码
        if(!is_string($str)||!mb_check_encoding($str,"utf-8")){
            die("输入的不是utf8类型的字符串");
        }
                                  
        //用mb_strlen函获取算utf8字符串的长度
        $length=mb_strlen($str,"utf-8");
                                  
        //声明一个数组备用
        $arr=array();
                                  
        //将字符串拆开放入数组
        for($i=0;$i<$length;$i++){
            $arr[$i]=mb_substr($str,$i,1,"utf-8");
        }
                                  
        //将数组按键名大小反转
        krsort($arr);
                                  
        //将数组中单个字符元素重新组合成字符串
        $str=implode("",$arr);
                                  
        //将翻转后的字符串返回
        return $str;
    }
                              
    echo '<br/>';
    print_r( $s );
    echo '<br/>';
    print_r( str_rev($s));
/*  得到结果：
 *  这是一段中文字符！
 *  !符字文中段一是这
 */
?>

