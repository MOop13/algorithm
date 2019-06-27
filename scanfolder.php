<?php
class File
{
    protected $arr = array();
    function findFile($flodername, $filename)
    {
        if (!is_dir($flodername)) {
            return "不是有效目录";
        }
        if ($fd = opendir($flodername)) {
            while($file = readdir($fd)) {
                if ($file != "." && $file != "..") {
                    $newPath = $flodername.'/'.$file;
                    if (is_dir($newPath)) {
                        $this->findFile($newPath, $filename);
                    }
                    if ($file == $filename) {
                        $this->arr[] = $newPath;
                    }
                }
            }
        }
        return $this->arr;
    }
}
?>
