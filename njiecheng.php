<?php 
function jiecheng($a)
{
    if($a > 1)
    {
        $r=$a*jiecheng($a-1);
    }else
    {
        $r=$a;
    }

    return $r;
}

$a=5;
echo $a."的阶乘的值 ".jiecheng($a);
