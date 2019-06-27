<?php
  // 检测输入类型
    $in = $_REQUEST['appname'];
    echo gettype($in);

    $new = (int)$in;

    echo gettype($new);
    echo $new;

?>

