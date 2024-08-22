
<html>
<head>
<title>User name reverse</title>
</head>
<body>
<form action="1q3.php" method="post">
<input type="text" placeholder="enter 1st name" name="first" required>
<input type="text" placeholder="enter middle name" name="middle" >
<input type="text" placeholder="enter last name" name="last" required>
<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$first=$_POST["first"];
$middle=$_POST["middle"];
$last=$_POST["last"];
if(!empty($middle))
echo "Dear user you have a middle name ";
else
echo "You hav not a middle name";

}

?>

</body>
</html>