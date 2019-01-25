<?php

$str1="25576";
//echo strlen($str1);
echo "<br>";
$str2="2";


$t1=str_split($str1);
$t2=str_split($str2);
$carry=0;
for($j=strlen($str2)-1;$j>=0;$j--){
    for($i=strlen($str1)-1;$i>=0;$i--)
    {
       
       $mul[$i]=$t2[$j]*$t1[$i]+$carry;
      // echo "$mul[$i]<br>";
         
      $sum[$i]=$mul[$i]%10;
     

      $carry=(int)($mul[$i]/10);


    }
    echo $carry;
}

for($k=0;$k<=strlen($str1)-1;$k++)
      //ltrim($sum[$k],'0'); 
      echo($sum[$k]);



      