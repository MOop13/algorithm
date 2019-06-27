<?php

header('Content-Type: text/html; charset=utf-8');
$path = './';
readDirsTree($path, 3);
/**
 * @param 目录地址
 * @param $deep=0 递归调用深度
 */
function readDirsTree($path, $deep=0) {
    $dir_handle = openDir($path);

    while(false !== $file=readDir($dir_handle)) {
        if ($file=='.' || $file=='..') continue;

        //输出该文件
        echo str_repeat('&nbsp;', $deep*4), $file, '<br>';
        //判断当前是否为目录
        if(is_dir($path . '/' . $file)) {
            //是目录
            $func_name = __FUNCTION__;
            $func_name($path . '/' . $file, 1+$deep);
        }

    }
    closeDir($dir_handle);
}
