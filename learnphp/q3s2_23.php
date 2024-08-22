<!-- Suppose you have a default list of ‘Student name’ and ‘Marks’ in an associative multi-dimensional array.
Now design a web page using HTML and PHP that show the list in tabular format and also print
name(s) of the student(s) who score highest marks in the given list.
[Inbuilt library function may be used if needed] -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Student Marks</h1>
    <?php
// Default list of students and their marks
$students = [
    ['name' => 'Alice', 'marks' => 85],
    ['name' => 'Bob', 'marks' => 92],
    ['name' => 'Charlie', 'marks' => 78],
    ['name' => 'Diana', 'marks' => 92],
    ['name' => 'Edward', 'marks' => 88]
];

// Find the highest marks
$highest_marks = 0;
foreach ($students as $student) {
    if ($student['marks'] > $highest_marks) {
        $highest_marks = $student['marks'];
    }
}

// Collect names of students with the highest marks
$top_students = [];
foreach ($students as $student) {
    if ($student['marks'] == $highest_marks) {
        $top_students[] = $student['name'];
    }
}

// Display the table
echo '<table>';
echo '<tr><th>Student Name</th><th>Marks</th></tr>';
foreach ($students as $student) {
    echo '<tr><td>' . htmlspecialchars($student['name']) . '</td><td>' . htmlspecialchars($student['marks']) . '</td></tr>';
}
echo '</table>';

// Display the top students
echo '<h2>Top Scorer(s):</h2>';
if (count($top_students) > 0) {
    echo '<p>' . implode(', ', $top_students) . '</p>';
} else {
    echo '<p>No top scorer found.</p>';
}
?>

</body>
</html>
