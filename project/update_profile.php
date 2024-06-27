<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<div class='container'><p>Please login first.</p></div>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_no = $_POST['contact_no'];

    $username = $_SESSION['username'];
    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', contact_no='$contact_no' WHERE username='$username'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>Record updated successfully</p></div>";
    } else {
        echo "<div class='container'><p>Error updating record: " . $conn->error . "</p></div>";
    }
}
?>

<div class="container">
    <form method="post" action="">
        <h2>Update Profile</h2>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>
        <label for="contact_no">Contact No:</label>
        <input type="text" name="contact_no" required><br>
        <button type="submit">Update</button>
    </form>
</div>
