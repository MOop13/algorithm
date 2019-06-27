<?php
// 句子单词 位置翻转

$sentence = "I love the world !";
$arr = explode(' ', $sentence);
$n = count($arr);
$arr_new = array();
for($i=1; $i<=$n; $i++){
    $arr_new[] = $arr[$n-$i]; 
}
$sentence_new = implode(' ', $arr_new);
var_dump($sentence_new);
?>
