<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_no = $_POST['contact_no'];

    $sql = "INSERT INTO users (username, password, first_name, last_name, contact_no) VALUES ('$username', '$password', '$first_name', '$last_name', '$contact_no')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>New record created successfully</p></div>";
    } else {
        echo "<div class='container'><p>Error: " . $sql . "<br>" . $conn->error . "</p></div>";
    }
}
?>

<div class="container">
    <form method="post" action="">
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>
        <label for="contact_no">Contact No:</label>
        <input type="text" name="contact_no" required><br>
        <button type="submit">Register</button>
    </form>
</div>
