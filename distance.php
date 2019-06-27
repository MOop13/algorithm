<?php

    function getDistanceSimple($x1, $y1, $x2, $y2, $type = 'm') {
        $distance = sqrt(($x1 - $x2) * ($x1 - $x2) + ($y1 - $y2) * ($y1 - $y2)) / 180 * 3.14159265 * 6360000;
        if ($distance < 1) { //停车状态下gps采集数据有偏差，小于一米的距离忽略
            $distance = 0;
        }
        if ($type == 'km') {
            return round($distance /= 1000.0, 2);
        }
        return round($distance);
    }
$distance = getDistanceSimple(114.43081174403,30.453953910093,114.425301,30.456285);
var_dump($distance);


