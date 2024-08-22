
<html>
<head>
<title>User name reverse</title>
</head>
<body>
<form action="1q4.php" method="post">
<input type="text" placeholder="enter text" name="text" required>
<input type="submit" value="abcd">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$text=$_POST["text"];
echo $text."<br>";
$output=str_replace(range(0,9),'',$text);
$output = preg_replace('/\s+/', '', $output);
echo $output;
}

?>

</body>
</html>