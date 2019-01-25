<?php

$str1="56789567895678956789567895678956789567895678912345";

$str2="67891234567891578967356956423457234678945356789152";
 $length1=strlen($str1);
 $reverseone=strrev($str1);
 echo "$length1<br>";
 $length2=strlen($str2);
 $reversetwo=strrev($str2);
echo $length2;
echo "<br>";
   
   $carry=0;
   
for($i=0;$i<$length1;$i++){

   $num[$i]=(ord($reverseone[$i])-48+ord($reversetwo[$i])-48+$carry)%10;
   
   
   $carry=(int)((ord($reverseone[$i])-48+ord($reversetwo[$i])-48+$carry)/10);
  
}
echo $carry;
 
for($i=$length1-1;$i>=0;$i--)
{
     echo $num[$i];
}
    

?>