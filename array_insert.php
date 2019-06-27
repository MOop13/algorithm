<?php
// 向array中插入数据
$arr =array('a','b','c','d','e');
print_r($arr);
$in = array('1','2');
$n = 2;
array_splice($arr,$n,0,$in);

print_r($arr);
