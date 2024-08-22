<?php
// Define an array of 15 numbers
$numbers = [34, 7, 23, 32, 5, 62, 22, 9, 18, 45, 67, 89, 12, 56, 78];

// Get the number of elements in the array
$n = count($numbers);

// Bubble Sort algorithm to sort the array in descending order
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numbers[$j] < $numbers[$j + 1]) {
            // Swap the elements
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}

// Display the sorted array
echo "Sorted numbers in descending order:\n";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "\n";

// Display the maximum value (which is the first element in the sorted array)
echo "Maximum value: " . $numbers[0];
?>
