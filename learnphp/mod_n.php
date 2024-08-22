<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modValue = $_POST['modValue'];

    // Validate the input
    if (!is_numeric($modValue) || $modValue <= 0) {
        echo "Invalid input. Please enter a positive integer.";
        exit;
    }

    $modValue = intval($modValue);

    // Generate the multiplication table
    echo "<h1>Multiplication Table for Mod $modValue</h1>";
    echo "<table>";
    echo "<tr><th>*</th>";

    // Print table header
    for ($i = 0; $i < $modValue; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    // Print table rows
    for ($i = 0; $i < $modValue; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 0; $j < $modValue; $j++) {
            $result = ($i * $j) % $modValue;
            echo "<td>$result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data received.";
}
?>
