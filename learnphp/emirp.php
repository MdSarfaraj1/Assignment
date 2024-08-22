<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="emirp.php">
    <input type="text" name="number" placeholder="enter number">
    <input type="submit" value="click">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num=$_POST["number"];
    if(!is_numeric($num))
    echo "enter a valid nubert";
    else{
        if(is_emirp($num))
    echo "the number is an emirp number";
else
echo " the numbver is not  A PRIME  number";
    }
}
function is_emirp($number)
{
    if(!is_prime($number))
    return false;
$reverse=reverse($number);
if(!is_prime($reverse))
return false;
else
return true;
}
function is_prime($number)
{
    if($number<=1)
    return false;
for($i=2;$i*$i<=$number;$i++)
{
    if($number%$i==0)
    return false;
}
return true;
}
function reverse($number)
{
    $r=0;
    while($number>0)
    {
        $r=$r*10+$number%10;
        $number=(int)($number/10);
    }
    return $r;
}

?>
</body>
</html>