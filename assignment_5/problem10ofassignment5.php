

<?php


 $a=array(

array(2,9,6,8,4),
array(4,3,8,11,38),
array(38,0,-84,4)
 );

 $N=11;

for($i=0;$i<3;$i++)
{

  for($j=0;$j<4;$j++)
    {
      if($a[$i][$j]==$N)
      {

        
        $row=$i+1;
        $column=$j+1;
        die("row = $row ,column = $column");
        
          break;


       }
    
  }

}

?>