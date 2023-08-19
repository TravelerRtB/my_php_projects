<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="" />
    <title>Title</title>
</head>
<body>
<form>
    <label for="fname">First name:</label><br>
    <input type="text" placeholder="Nejad"><br><br>
    <label for="lname">Last name:</label><br>
    <input type="text" placeholder="Muhammad"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
$numSet = array(4,6,8,10,37);
echo "Maximum Number is: ". max($numSet). "<br>";
echo "Minimum Number is: ". min($numSet). "<br>";

$num = 3.49;
echo round($num). "<br>";

echo floor(8.7), "<br>";

echo ceil(8.7);

