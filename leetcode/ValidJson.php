<?php
function json_validate($string) {
    if (is_string($string)) {
        @json_decode($string);
        return (json_last_error() === JSON_ERROR_NONE);
    }
    return false;
}



$json = '{
  "code": 501,
  "message": "session错误,请重新登录"
}';


$arr = json_decode($json,true);
$result = json_validate($json);
var_dump($arr);
echo $result;
?>
