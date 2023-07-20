<?php
/*
for loop:
$fruits = ["apple", "banana", "orange", "grape", "tomato", "mango"];
for($i=0;$i<count($fruits);$i++){
    echo "Index of element ",$i," = ",$fruits[$i],"<br>";
}
*/

// while loop:
$cars = ["Dodge", "Grand Marquis", "Buick", "Oldsmobile", "Mitsubishi"];
$i = 0;
while ($i < count($cars)) {
    echo "The Car in place number ", $i + 1, " is ", $cars[$i], ".", "<br>";
    $i++;
}
