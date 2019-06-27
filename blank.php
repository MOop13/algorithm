<?php
$string = "   hello   world,     hello       ,my           dear             Wendy  ";
$length = strlen($string);
$blank_list = $word_list = array();
$new = $str = $word_str = '';
$j = $k = 0 ;
for ($i = 0; $i < $length; $i++){
    if(substr($string, $i, 1) == ' '){
        $str = $str . substr($string, $i, 1);                
        $blank_list[$j] = $str;
        if (substr($string, $i+1, 1) != ' '){
            $j = $j +1 ;
            $str = '';
        }
    }
    if(substr($string, $i, 1) != ' '){
        $word_str .= substr($string, $i, 1);
        $word_list[$k] = $word_str;
        if (substr($string, $i+1, 1) == ' '){
            $k = $k + 1;
            $word_str = '';
        }
    }    
} 

if((count($blank_list) -count($word_list) )> 0){
    for ($m =0; $m<count($word_list); $m++){
        $new .= $blank_list[$m]. $word_list[count($word_list) - $m -1 ];
    }    
    $new = $new . $blank_list[count($blank_list) - 1];
}
if((count($blank_list)- count($word_list) )< 0){
    for ($m =0; $m<count($blank_list); $m++){
        $new .= $word_list[count($blank_list) - $m ].$blank_list[$m];
    }    
    $new = $new . $word_list[0];
}
if(count($blank_list) - count($word_list) ==0){
    if(substr($string,0,1) == ' '){
        for ($m =0; $m<count($word_list); $m++){
            $new .= $blank_list[$m]. $word_list[count($word_list) - $m -1];
        }
    }
    if(substr($string,0,1) != ' '){
        for ($m =0; $m<count($blank_list); $m++){
            $new .= $word_list[count($blank_list) - $m -1].$blank_list[$m];
        }
    }    
}    
var_dump($string);
var_dump($new);
