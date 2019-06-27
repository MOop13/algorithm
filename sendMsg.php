 
<?php
function send_sms($phone,$message) {


    $url = //此处为短信接口的链接，具体的用法参考短信接口的说明
    $ch = curl_init(); //初始化一个新的会话
      
    $timeout = 15;   
      
    curl_setopt ($ch, CURLOPT_URL, $url);   
      
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);   //模仿一个用户行为，具体用法参考curl_setopt函数用法。此处模仿一个浏览器输入行为
      
    $file = curl_exec($ch);  //执行会话
      
    curl_close($ch);   // 关闭会话，释放资源。
    

    if($file){
        $info = substr($file,0,12);
        if($info == "发送成功"){
            return true;
        }else{
            return false;
        }
    }

}

?>
