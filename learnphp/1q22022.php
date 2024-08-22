
<html>
<head>
<title>User name reverse</title>
</head>
<body>
<form action="SET1q22022.php" method="post">
<textarea cols="25" rows="15" placeholder="enter your text"  name="text"></textarea>
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$text=$_POST["text"];
$textlength=strlen($text);
$halftext=$textlength/2;
$output=substr($text,0,$halftext);

echo $output;

}

?>

</body>
</html>