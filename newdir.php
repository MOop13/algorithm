<?php

header('Content-Type: text/html; charset=utf-8');
$path = './';
dirsearch($path);
function dirsearch($path){
    //遍历目录第一层
    $handle=opendir($path);    //打开目录
    while (($item=readdir($handle))!==false) {
        //循环遍历目录
        if($item!='.'&&$item!='..'){
            if (is_file ( $path . "/" . $item )) {
                $arr ['file'] [] = $item;
                $arr_path_file[$path][] = $item;
            }
            if (is_dir ( $path . "/" . $item )) {
                $arr ['dir'] [] = $item;
                $arr_path_file[$path][] = $item;
            }
        }
    }
    closedir($handle);
    var_dump( $arr_path_file );
}
