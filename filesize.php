<?php
function getFilesize($num){
   $p = 0;
   $format='bytes';
   if($num>0 && $num<1024){
     $p = 0;
     return number_format($num).' '.$format;
   }
   if($num>=1024 && $num<pow(1024, 2)){
     $p = 1;
     $format = 'KB';
  }
  if ($num>=pow(1024, 2) && $num<pow(1024, 3)) {
    $p = 2;
    $format = 'MB';
  }
  if ($num>=pow(1024, 3) && $num<pow(1024, 4)) {
    $p = 3;
    $format = 'GB';
  }
  if ($num>=pow(1024, 4) && $num<pow(1024, 5)) {
    $p = 3;
    $format = 'TB';
  }
  $num /= pow(1024, $p);
  return number_format($num, 3).' '.$format;
}
//
//echo getFilesize(2000000000000)."<br/>";
?>
