<!-- Write a program using HTML, PHP that asks user to input username, password for login purpose. 
As of now, there are only three valid usernames and those are "admin", "myadmin", "okadmin".
 Password must not be readable on screen. Give user a choice option to choose his/her 
 username and keep corresponding text area for inputting password. 
 Store all the valid username, password pairs in array.
  On submit, process login request inputs with pre-stored credentials.

Display if login is successuful or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="username">Username:</label>
        <select id="username" name="username" required>
            <option value="admin">admin</option>
            <option value="myadmin">myadmin</option>
            <option value="okadmin">okadmin</option>
        </select><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
// Define valid username-password pairs
$credentials = array(
    "admin" => "adminpass",
    "myadmin" => "myadminpass",
    "okadmin" => "okadminpass"
);

// Get form inputs
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Check if username exists in the credentials array and validate password
if (array_key_exists($username, $credentials) && $credentials[$username] === $password) {
    echo "Login successful!";
} else {
    echo "Login failed. Invalid username or password.";
}
?>
