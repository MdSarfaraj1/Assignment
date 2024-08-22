<!-- Write a program using HTML, PHP that asks user to input his/her login credentials as username, password.
 Password must not be readable on screen. On submit, do validation of the inputted data as:

Password must contain at least a '*' symbol and at least of length six.
 Assume, Password is same as username, but must contain a '*' anywhere in the string.

For example: <"admin", "adm* in"> is a valid pair. Assume max.length of password to be twelve.
 Report login success or failure. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="validate.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" maxlength="12" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check password length and if it contains a '*'
    if (strlen($password) >= 6 && strpos($password, '*') !== false) {
        // Check if password is same as username but contains a '*' symbol
        $strippedPassword = str_replace('*', '', $password);

        if ($username === $strippedPassword) {
            echo "Login successful!";
        } else {
            echo "Login failed: Password must match username with a '*' symbol.";
        }
    } else {
        echo "Login failed: Password must be at least 6 characters long and contain a '*'.";
    }
}
?>
