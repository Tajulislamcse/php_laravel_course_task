<?php

$x1=5;   $y1=6;    $r1=2;
$x2=7;   $y2=8;    $r2=3;

$distance=sqrt(

    
    pow(($x2-$x1),2)+pow(($y2-$y1),2));


 echo(($distance<=$r1+$r2)? "yes"  : "no"  );


?>
