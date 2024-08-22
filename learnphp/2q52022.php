
<html>
<head>
<title>User name reverse</title>
</head>
<body>
    <h1>Hello Amit Das ,please enter your academic details </h1>
<form action="2q5.php" method="post">
    <label for="rol">University Roll Number</label>
    <input type="text" placeholder="roll" name="roll" id="rol" required>
|<BR>
    <label for="reg">University Registration Number</label>
    <input type="text" placeholder="registration" name="registration" id="reg" required>
    <BR>
    <label for="sem">Semester info</label>
    <select id="sem" name="semester">
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="V">V</option>
        <option value="VI">VI</option>
    </select>
    <BR>
    <label for="session">Enter the academic session </label>
    <input type="text" placeholder="session" name="session" id="session" required>
    <BR>
    SELECT CORE-COURSE
    <input type="radio" name="course" value="CC6">CC 6
    <input type="radio" name="course" value="CC7">CC 7
    <input type="radio" name="course" value="CC8">CC 8
    <input type="radio" name="course" value="CC9">CC 9
<BR>
<input type="submit" value="abcd">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll'];
    $reg_no = $_POST['registration'];
    $semester = $_POST['semester'];
    $session = $_POST['session'];
    $COURSE=$_POST['course'];
if(strpos("CU-2022",$reg_no)===0){
    echo "<h1>Submitted Data</h1>";
        echo "<p><strong>University Roll No.:</strong> $roll_no</p>";
        echo "<p><strong>University Registration No.:</strong> $reg_no</p>";
        echo "<p><strong>Semester:</strong> $semester</p>";
        echo "<p><strong>Academic Session:</strong> $session</p>";
}
else{
    echo"<p> Enter correct registration</p>";
}
}
?>
</body>
</html>