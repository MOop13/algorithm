<?php


$data['created'] = date('H:i:s', time());

$blank = 15 ;
$data['string'] = '+'. $blank.  ' minute';
$data['estimate'] = date('H:i:s', strtotime($data['string']));

echo json_encode($data);

