<?php
// 邮箱正则匹配
$mail = 'runoob@runoob.com.cn';  //邮箱地址
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
$pattern2 = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
preg_match($pattern2, $mail, $matches);
var_dump($matches);  //输出匹配结果
?>
