<?php

$url = $argv[1];
$pic = file_get_contents($url);

echo $pic;

