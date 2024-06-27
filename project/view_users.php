<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <?php
    $sql = "SELECT username, first_name, last_name, contact_no FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>All Users</h2>";
        echo "<table><tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Contact No</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["username"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["contact_no"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found</p>";
    }
    ?>
</div>
