<?php

function showJsonRes($code,$data){

    $result = json_encode(array('errno' => $code, 'errmsg' => $data ));

    print_r($result);
}    

