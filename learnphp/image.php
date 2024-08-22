<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $img1=$_POST["1"];
    $img2=$_POST["2"];
    $img3=$_POST["3"];
    $img4=$_POST["4"];
    $img5=$_POST["5"];
    $img6=$_POST["6"];
    $img7=$_POST["7"];
    $img8=$_POST["8"];
    $img9=$_POST["9"];
    $img10=$_POST["10"];
    echo "<img src='$img1'>";
   
    
    
}
?>
<html>
    <body>
        <table border="4" align="center" cellspacing="4">
            <tr><td>image 1<img src="$img"></td><td>image 2<img src="$img"></td></tr>
            <tr><td>image 3<img src="$img"></td><td><img src="$img"></td></tr>
            <tr><td><img src="$img"></td><td><img src="$img"></td></tr>
            <tr><td><img src="$img"></td><td><img src="$img"></td></tr>
            <tr><td><img src="$img"></td><td><img src="$img"></td></tr>
            <tr><td><img src="$img"></td><td><img src="$img"></td></tr>
        </table>
    </body>
</html>
<?php
header("Refresh:2;url=emirp.php");
exit();
?>