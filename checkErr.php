<?php
function my_dir($dir) {
    $files = array();
    $count = 0;
    $errFiles =array();
    //注意这里要加一个@，不然会有warning错误提示：）
    if(@$handle = opendir($dir)) {
        while(($file = readdir($handle)) !== false) {
            //排除根目录；
            if($file != ".." && $file != ".") {
                //如果是子文件夹，就进行递归
                if(is_dir($dir."/".$file)) {
                    $files[$file] = my_dir($dir."/".$file);
                } else {
                    //不然就将文件的名字存入数组；
                    $err = exec("php -l ". $file. ' >> checkErr.txt');
                    //$err = shell_exec("php -l ". $file);
                    if('No syntax errors detected in' == substr($err, 0,28)){
                        $files[] = $file;
                    }else {
                        $errFiles[] = $file;
                    }
                }

            }
        }
        closedir($handle);
        //return $files;
        return $errFiles;
    }
}
echo "<pre>";
print_r(my_dir("."));
echo "</pre>";
