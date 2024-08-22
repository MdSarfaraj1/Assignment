<!-- Write a program using HTML, PHP that will accept user address as given below:
Street Number:
Street Name:
Building Name:
City Name :
State Name:
Pin Code:
Check whether City Name and State Name are given in characters and pin code using digits. 
Otherwise error is shown.
If all the inputs are correctly given show the address as -->

<Street Number> <Street Name> <Building Name> <City Name> <State Name> <Pin Code>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Form</title>
</head>
<body>
    <h2>Enter Address</h2>
    <form action="process.php" method="post">
        <label for="street_number">Street Number:</label>
        <input type="text" id="street_number" name="street_number" required><br><br>
        
        <label for="street_name">Street Name:</label>
        <input type="text" id="street_name" name="street_name" required><br><br>
        
        <label for="building_name">Building Name:</label>
        <input type="text" id="building_name" name="building_name"><br><br>
        
        <label for="city_name">City Name:</label>
        <input type="text" id="city_name" name="city_name" required><br><br>
        
        <label for="state_name">State Name:</label>
        <input type="text" id="state_name" name="state_name" required><br><br>
        
        <label for="pin_code">Pin Code:</label>
        <input type="text" id="pin_code" name="pin_code" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $street_number = $_POST['street_number'];
    $street_name = $_POST['street_name'];
    $building_name = $_POST['building_name'];
    $city_name = $_POST['city_name'];
    $state_name = $_POST['state_name'];
    $pin_code = $_POST['pin_code'];

    // Validate City Name and State Name (should contain only characters)
    if (!preg_match("/^[a-zA-Z\s]+$/", $city_name)) {
        echo "Error: City Name should contain only characters.<br>";
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $state_name)) {
        echo "Error: State Name should contain only characters.<br>";
    }

    // Validate Pin Code (should contain only digits)
    if (!preg_match("/^\d+$/", $pin_code)) {
        echo "Error: Pin Code should contain only digits.<br>";
    }

    // If no errors, display the address
    if (preg_match("/^[a-zA-Z\s]+$/", $city_name) && preg_match("/^[a-zA-Z\s]+$/", $state_name) && preg_match("/^\d+$/", $pin_code)) {
        echo "<h3>Address:</h3>";
        echo htmlspecialchars($street_number) . " " . htmlspecialchars($street_name) . " " . htmlspecialchars($building_name) . "<br>";
        echo htmlspecialchars($city_name) . ", " . htmlspecialchars($state_name) . "<br>";
        echo htmlspecialchars($pin_code);
    }
}
?>
