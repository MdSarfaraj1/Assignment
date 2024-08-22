<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="number" name="number" min="1">
    <button type="submit">generate</button>
    <form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input term from the form
    $term = intval($_POST["number"]);

    // Initialize the first two Fibonacci numbers
    $fib_series = [0, 1];

    // Generate the Fibonacci series up to the input term
    for ($i = 2; ; $i++) {  
        $next=$fib_series[$i - 1] + $fib_series[$i - 2];
        if($next>$term)
        break;
        $fib_series[$i] = $next;
      
    }

    // Display the generated Fibonacci series
    echo "<h2>Fibonacci Series up to term $term:</h2>";
    echo "<ul>";
    foreach ($fib_series as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>
