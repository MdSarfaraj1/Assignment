<?php
$students = [
    ['username' => 'Alice', 'password' => 85],
    ['username' => 'Bob', 'password' => 92],
    ['username' => 'Charlie', 'password' => 78],
    ['username' => 'Diana', 'password' => 92],
    ['username' => 'Edward', 'password' => 88]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    
    $user_found = false;

    // Display list before update
    echo "<h2>Before Password Update:</h2>";
    foreach ($students as $student) {
        echo "Username: " . $student["username"] . " - Password: " . $student["password"] . "<br>";
    }

    // Update the password
    foreach ($students as &$student) {
        if ($student['username'] === $username) {
            $student['password'] = $new_password;
            $user_found = true;
            break;
        }
    }

    if (!$user_found) {
        echo "<p>Username not found!</p>";
    } else {
        // Display list after update
        echo "<h2>After Password Update:</h2>";
        foreach ($students as $student) {
            echo "Username: " . $student["username"] . " - Password: " . $student["password"] . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Login Password</title>
</head>
<body>
    <h1>Reset Login Password</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
