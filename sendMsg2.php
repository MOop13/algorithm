<?php   
$url = "http://sms.api.bz/fetion.php?username=13812345678&password=123456&sendto=13512345678&message=短信内容";   
$result = file_get_contents($url);   
echo $result; //返回信息默认为UTF-8编码的汉字，如果你的页面编码为gb2312，请使用下行语句输出返回信息。   
//echo iconv("UTF-8", "GBK", $result);   
?>
