<?php

$age = 0;
if ($age >= 100) {
    echo "You don't need this anymore";
} elseif ($age >= 18) {
    echo "You are allowed to enter this site";
} elseif ($age <= 0) {
    echo "Enter a valid age please...";
} else {
    echo "You are not allowed to enter this site";
}

?>



