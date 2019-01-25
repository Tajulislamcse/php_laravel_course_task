<?php

$str="23,44,70,25,90,17";

$array=explode(",",$str);
 
 $size=sizeof($array);
 
 
$sum=0;
 

for($i=0;$i<$size;$i++)
{
     $sum+= $array[$i];


}

$average=($sum)/($size);
echo number_format( $average,2);




?>