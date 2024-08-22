<!-- Write a program that will accept an array of integers as input, and output an array where for each item
in the source array, the new array will perform the following operations :
(a) If the number is even then find (2 ^ location number).
(b) If the number is odd then find (number X location number)
Example : array (10, 20, 5, 16, 38, 97, 84, 11, 21, 66)
Output : 1, 2, 15, 8, 16, 485, 64, 77, 168, 512. -->
<html>
    <body>
        <form method="post">
    <input type="text" name="array" placeholder="separate number using ,">
    </form>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $numbers=$_POST["array"];
    $array=explode(',',$numbers);
    print_r($array);
    echo "<br>";
    $output=[];
    for($i=0;$i<count($array);$i++)
    {
        if($array[$i]%2==0)
        {
            $output[$i]=pow(2,$i);
        }
        else
        $output[$i]=$array[$i]*$i;

    }
    print_r($output);
    echo "Output: " . implode(", ", $output);
}
?>