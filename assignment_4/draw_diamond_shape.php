<?php
echo"<pre>";
$totalRows=4;

for($row=1;$row<=$totalRows;$row++)
{
   for($colspace=$totalRows-$row;$colspace>=1;$colspace--){
        echo"&nbsp;&nbsp";
   }

   for($colstar=1;$colstar<=2*$row-1;$colstar++){
     echo "&nbsp;*";
   }
   echo"<br>";
}
for($row=$totalRows-1;$row>=1;$row--)
  {
    for($colspace=1;$colspace<=$totalRows-$row;$colspace++)
    {
        echo"&nbsp;&nbsp";
   }
   for($colstar=1;$colstar<=2*$row-1;$colstar++){

       echo"&nbsp;*";
   }
   
      echo"<br>";
  }
  echo"<pre>";
?>