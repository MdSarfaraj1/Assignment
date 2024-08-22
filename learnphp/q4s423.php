<!-- Write a script to store the elements into an array. Perform the following operations :
12 Yamaha
14 Hero Honda
6 Tata
9 Maruti Suzuki
Company Code Brand
(a) Insert an item into 3rd position.
(b) Delete the last element.
(c) Get the Second element of the array. -->
<?php
$company=[
    [12,"yamaha"],
    [14,"hero"],
    [6,"tata"],
    [9,"maruri suzuki"]
];
echo "<pre>";
print_r($company);
echo "</pre>";
echo "<br><br><br>";
$newVehicle = [ 10, "Mahindra"];
array_splice($company, 2, 0, [$newVehicle]);
array_pop($company);
echo "<pre>";
print_r($company);
echo "</pre>";
echo "<br><br><br>";
print_r($company[1]);
?>