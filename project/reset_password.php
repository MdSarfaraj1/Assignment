<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<div class='container'><p>Please login first.</p></div>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
    $username = $_SESSION['username'];
    $sql = "UPDATE users SET password='$new_password' WHERE username='$username'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>Password reset successfully</p></div>";
    } else {
        echo "<div class='container'><p>Error resetting password: " . $conn->error . "</p></div>";
    }
}
?>

<div class="container">
    <form method="post" action="">
        <h2>Reset Password</h2>
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br>
        <button type="submit">Reset Password</button>
    </form>
</div>
