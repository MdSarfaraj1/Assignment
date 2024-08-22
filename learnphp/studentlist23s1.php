<!-- Design a web page using HTML and PHP that will input ‘name’ and ‘age’ list of 5 students using
textbox and dropdown box and perform the following operations :
(a) Print each student’s record as “ ‘<name>’ is ‘<age>’ years old” by pressing “PRINT ALL” submit
button.
(b) Print the list in sorted order on value of age (both descending and ascending) using ‘SORT’ submit
button.
[Inbuilt functions may be used wherever required] -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
    <h1>Student Records</h1>
    
    <!-- Form to enter student data -->
    <form method="POST">
        <?php for($i=0;$i<5;$i++):?>
       Name<?=$i+1?><input type="text" name="name[]"><br>
      Age<?=$i+1?> <input type="number" name="age[]"><br>
       <?php endfor;?>
        <button type="submit" name="all" value="all">Print all</button>
        <button type="submit" name="sort" value="sort">Short</button>
        <select name="order">
            <option value="aces">Acessending</option>
            <option value="decs">Dessending</option>
        </select>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=array_filter($_POST["name"]);
    $age=array_filter($_POST["age"]);
    if (empty($name) || empty($age)) {
        echo "Please enter all the names and ages.";
        exit();
    }
    $combine=array_combine($name,$age);
    if(isset($_POST["all"]))
    {
        for($i=0;$i<count($combine);$i++)
        {
            echo "$name[$i] is $age[$i] year olmnnmnmmnd<br>";
        }
    }
    if(isset($_POST["sort"]))
    {
       
        
       
        if($_POST["order"]=="aces") // printing in assending order
        {asort($combine);}
        else
        {arsort($combine);}
         foreach($combine as $key=>$value)
        {
            echo "$key is $value year old<br>";
        }
    }
}
?>
   