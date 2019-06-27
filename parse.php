<?php
$str ='{"not_stag":{"int_tag":[[4920]],"str_tag":[["slslslsd"]]},"stag":null}';

$not_stag = json_decode($str,true)['not_stag'];
$stag = json_decode($str,true)['stag']['str_tag'][0][0];
var_dump($not_stag, $stag);
