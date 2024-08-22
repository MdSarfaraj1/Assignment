<!-- Write an HTML page that contains a selection box with a list of 5 subjects in the above page when the
user selects a subject, its marks should be printed next to the list.
subject  marks
Maths     92
Physics   80
Chemistry 86
English   94
Computer  91 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Marks</title>
</head>
<body>
    <h1>Subject Marks</h1>
    <form method="post">
        <label for="subjectSelect">Select a Subject:</label>
        <select id="subjectSelect" name="subject">
            <option value="">--Select--</option>
            <option value="Maths">Maths</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="English">English</option>
            <option value="Computer">Computer</option>
        </select>
        <button type="submit">Show Marks</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $subjects = [
            'Maths' => 92,
            'Physics' => 80,
            'Chemistry' => 86,
            'English' => 94,
            'Computer' => 91
        ];

        $selectedSubject = $_POST['subject'] ?? '';

        if (array_key_exists($selectedSubject, $subjects)) {
            echo "<p>Marks: {$subjects[$selectedSubject]}</p>";
        } elseif ($selectedSubject === '') {
            echo "<p>Please select a subject.</p>";
        }
    }
    ?>
</body>
</html>
