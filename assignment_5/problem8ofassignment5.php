<?php

$str1="56789567895678956789567895678956789567895678956789";

$str2="12345678912345678912345678912345678912345678912345";
 $length1=strlen($str1);
 $reverseone=strrev($str1);
 echo "$length1<br>";
 $length2=strlen($str2);
 $reversetwo=strrev($str2);
echo $length2;
echo "<br>";
   
   $carry=0;
   
   
for($i=0;$i<$length1;$i++){
    
   $sub[$i]=(ord($reverseone[$i])-48)-((ord($reversetwo[$i])-48)+$carry);
   //echo $sub[$i];
   //echo "<br>";
   
   

   if($sub[$i]<0)
    {
        $sub[$i]=$sub[$i]+10;
        $carry=1;

    }
    else $carry=0;
  
}
  

//echo $carry;

 
for($i=$length1-1;$i>=0;$i--)
{
     echo $sub[$i];
}
    

