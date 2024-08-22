<?php
// Define the associative array
$associativeArray = [
    "India" => "New Delhi",
    "Afghanistan" => "Kabul",
    "Australia" => "Canberra",
    "Bangladesh" => "Dhaka",
    "Brazil" => "Brasilia",
    "Canada" => "Ottawa",
    "China" => "Beijing",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Thailand" => "Bangkok"
];

// Sort the array by keys (country names)
ksort($associativeArray);

// Transform into a 2-dimensional array
$twoDimensionalArray = [];
foreach ($associativeArray as $country => $capital) {
    $twoDimensionalArray[] = [$country, $capital];
}

// Display the data as a table
echo "<table border='1'>";
echo "<tr><th>Country</th><th>Capital</th></tr>";

foreach ($twoDimensionalArray as $row) {
    echo "<tr>";
    echo "<td>{$row[0]}</td>";
    echo "<td>{$row[1]}</td>";
    echo "</tr>";
}

echo "</table>";
?>
