<!-- Write a function CountWords ($ string) that takes any string of characters and finds the number of times
each word occurs. You need to ignore the distinction between capital and lower case letters.
Example :
string = ‘Then the man gets the hen’
$ substring = ‘he’
output : 4 -->

<?php
$string="Th hh hhh";
$substring="hh";
echo countw($string,$substring);
function countw($string,$substring)
{
    $string=strtolower($string);
    $array=explode(' ',$string);
    $Count=0;
    foreach ($array as $word) {
        $Count += substr_count($word, $substring);
    }
    return $Count;


}
?>