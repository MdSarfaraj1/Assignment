<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];
    $reg_no = $_POST['reg_no'];
    $semester = $_POST['semester'];
    $session = $_POST['session'];
    $cc6 = $_POST['cc6'];
    $cc7 = $_POST['cc7'];
    $cc8 = $_POST['cc8'];
    $sec = $_POST['sec'];

    // Check if the registration number starts with "CU-2023-"
    if (strpos($reg_no, "CU-2023-") === 0) {
        // Display the submitted data
        echo "<h1>Submitted Data</h1>";
        echo "<p><strong>University Roll No.:</strong> $roll_no</p>";
        echo "<p><strong>University Registration No.:</strong> $reg_no</p>";
        echo "<p><strong>Semester:</strong> $semester</p>";
        echo "<p><strong>Academic Session:</strong> $session</p>";
        echo "<p><strong>Marks in CC6:</strong> $cc6</p>";
        echo "<p><strong>Marks in CC7:</strong> $cc7</p>";
        echo "<p><strong>Marks in CC8:</strong> $cc8</p>";
        echo "<p><strong>Marks in SEC:</strong> $sec</p>";
    } else {
        // Show an error message
        echo "<h1>Error</h1>";
        echo "<p>The University Registration Number must start with 'CU-2023-'.</p>";
    }
}
?>
