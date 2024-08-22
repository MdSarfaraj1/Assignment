<!-- maximum in 2d array -->
 <?php
 $array=[
    [4,8,5,2,6],
    [8,2,4,45,100],
    [12,354,85,14]
 ];
 $max=0;
 foreach($array as $row) 
 {
    foreach($row as $i)
    {
        if($i>$max)
        {
            $max=$i;
        }
    }
 }
 echo $max;
 
 ?>