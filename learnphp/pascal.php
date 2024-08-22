<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pascal's Triangle</title>
</head>
<body>
    <h1>Generate Pascal's Triangle</h1>
    <form method="post">
        <label for="lines">Enter the number of lines:</label>
        <input type="number" id="lines" name="lines" min="1" required>
        <input type="submit" value="Generate">
    </form>
</body>
</html>

<?php
function generatePascalTriangle($n) {
    $triangle = [];

    for ($line = 0; $line < $n; $line++) {
        // Initialize the first and last values in the row to 1
        $triangle[$line][0] = 1;
        $triangle[$line][$line] = 1;

        // Calculate the in-between values
        for ($i = 1; $i < $line; $i++) {
            $triangle[$line][$i] = $triangle[$line - 1][$i - 1] + $triangle[$line - 1][$i];
        }
    }

    return $triangle;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lines = intval($_POST["lines"]);

    if ($lines < 1) {
        echo "<p>Please enter a valid number of lines.</p>";
    } else {
        $pascalTriangle = generatePascalTriangle($lines);

        echo "<h1>Pascal's Triangle with $lines Lines</h1>";
        foreach ($pascalTriangle as $row) {
            echo implode(" ", $row) . "<br>";
        }
        
    }
}
?>
