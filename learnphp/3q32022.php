<!-- leap year -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Year Checker</h1>
    <form  method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    
    // Extract the year from the date of birth
    $year = date("Y", strtotime($dob));
    
    // Function to check if a year is a leap year
    function isLeapYear($year) {
        return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
    }
    
    // Check if the year is a leap year
    if (isLeapYear($year)) {
        $result = "$name, the year $year is a leap year.";
    } else {
        $result = "$name, the year $year is not a leap year.";
    }
    echo $result;
}
?>

