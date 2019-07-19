<?php

/**
  * 用shell获取远程文件
  *
  * $url    string  文件或网页地址
  * $dir    string  文件存放地址 默认是/tmp/
  */
 function getFileByWget($url, $dir='./PIC') {
    if(empty($url)) {
        return null;
    }
    $file_name = $dir.md5(time().rand());
    $command = "wget -q {$url}";
    echo $command;
    system($command);
    return ;
}
getFileByWget('https://f11.baidu.com/it/u=851614969,3065049041&fm=173&app=49&f=JPEG','./'); //使用方法


