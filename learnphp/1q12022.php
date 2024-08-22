
<html>
<head>
<title>User name reverse</title>
</head>
<body>
<form action="SET1q12022.php" method="post">
<input type="text" placeholder="enter username" name="user">
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST["user"];
if($user!="admin")
{
echo "user not allowed";
}
else
{
$reverse=strrev($user);
echo "welcome $reverse";
}

}

?>

</body>
</html>