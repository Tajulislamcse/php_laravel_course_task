<?php
$number=10;
echo "Prime numbers are:";
for($i=2;$i<=$number;$i++)
  {   
     for($j=2;$j<=$i;$j++)
        {
           if($i%$j==0)
              {
                  break;
              }
        }
if($i==$j)
   {
       echo "$i<br>";
   }
}