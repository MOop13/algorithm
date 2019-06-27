<?php
// 句子单词 位置翻转

$sentence = "       I  love   the     world      better  ";
$sentence_ltrim = ltrim($sentence, ' ');
$sentence_rtrim = rtrim($sentence, ' ');
$left_num = strlen($sentence) - strlen($sentence_ltrim);
$right_num = strlen($sentence) - strlen($sentence_rtrim);
$sentence_format = trim($sentence);
$sentence_replace_to_count = preg_replace ( "/\s(?=\s)/","\\1", $sentence_format );
$sentence_replace = $sentence_format;

$arr = explode(' ', trim($sentence_replace_to_count));
$n = count($arr);
$balnk_list = array();
$blank_list2 =array();
$word_list = array();
for($m=0 ; $m< $n; $m++ ){
    $blank_num = strpos( $sentence_replace,' ');
    $length =  strlen($sentence_replace);
    $blank_list[] = $blank_num;
    $word_list[]= substr($sentence_replace, 0, strpos($sentence_replace, ' '));
    $sentence_replace = substr_replace($sentence_replace, ' ', 0, $blank_num);
    $sentence_replace = ltrim($sentence_replace); 
    $blank_list2[] = strlen($sentence_format) - strlen($sentence_replace) - $blank_num;
    if ($sentence_format == $sentence_replace){
        $word_list[$n-1] = $sentence_replace;
    }
    $sentence_format = $sentence_replace;

}    
$arr_new = array();
$blank = array();
$blank_str = '';
$sentence_new = '';
for($i=0; $i<$n; $i++){
    for ($t =0; $t<$blank_list2[$i]; $t++){
        $blank_str .= ' ';
    }
    $blank[$i] = $blank_str;
    $blank_str = '';
//    var_dump($blank[$i]);
//    var_dump($word_list[$n-$i-1]);
    $sentence_new .= $word_list[$n-$i-1].$blank[$i]; 
}
$str_left = '';
$str_right = '';
for($j = 0 ; $j < $left_num;$j++){
    $str_left .= ' ';
}
for($k = 0 ; $k < $right_num;$k++){
    $str_right .= ' ';
}

$result = $str_left.$sentence_new.$str_right;
var_dump($sentence,$result);
?>
