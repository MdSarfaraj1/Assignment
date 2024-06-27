<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            echo "<div class='container'><p>Login successful!</p></div>";
        } else {
            echo "<div class='container'><p>Invalid password.</p></div>";
        }
    } else {
        echo "<div class='container'><p>No user found with that username.</p></div>";
    }
}
?>

<div class="container">
    <form method="post" action="">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</div>
