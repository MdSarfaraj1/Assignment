<?php
// norml array (integer index)

$array=["palash",'jana'];
$array2=array(1,2,3);
print_r($array2);
echo "<br>";
echo "<pre>";
print_r($array);
echo "</pre>";
echo $array[0];
$array[]="bad";
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr>";

// associative array (string index)

$arr=array(
	'name'=>"md sarfaraj",
	'ad'=>"wesxt bengal",
	"class"=>'hgghf',
);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo  $arr["name"];
echo "<hr>";


// multidimentional array
$arr2=array(
	'name'=>"md sarfaraj",
	'ad'=>"wesxt bengal",
	"class"=>'hgghf',
	'subject'=>array('math','english')
);
$arr2['normal']="yes";		// inserting value
	$y=array(1,2,3);	//inserting a rray into array
	$arr2['arr']=$y;

$arr2['subject'][]="computer";	// inserting into subject

echo "<pre>";		// printing
print_r($arr2);
echo "</pre>";
?>