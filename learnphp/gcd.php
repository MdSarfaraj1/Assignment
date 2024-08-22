<?php
// Function to calculate GCD using Euclidean algorithm
function gcd($a, $b) {
    while ($b != 0) {  // gcd(a,b)=gcd(b,a%b)
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Function to calculate LCM using GCD
function lcm($a, $b) {
    return abs($a * $b) / gcd($a, $b);
}

// Input numbers
$num1 = 56; // You can change this value
$num2 = 98; // You can change this value

// Calculate GCD and LCM
$gcd_result = gcd($num1, $num2);
$lcm_result = lcm($num1, $num2);

// Display the results
echo "The GCD of $num1 and $num2 is $gcd_result.<br>";
echo "The LCM of $num1 and $num2 is $lcm_result.";
?>
