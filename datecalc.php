<?php
 
//今天与2008年10月11日相差多少天
$date1 = strtotime('2018-12-15');
$date2 = strtotime('2018-08-22');
var_dump($date1-$date2);
$result =ceil(($date1-$date2)/(3600*24));
echo $result;

?>
