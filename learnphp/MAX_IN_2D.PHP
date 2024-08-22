
<?php
$array=[
    [4,8,6,21],
    [78,4,5,2],
    [2,57,90,95]
];
$max=0;
foreach($array as $row)
{
    foreach($row as $value)
    {
        if($value>=$max)
        $max=$value;
    }
}
echo "The maximum value is $max"; 


?>