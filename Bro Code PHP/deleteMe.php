<!
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="deleteMe.php" method="POST">
        <label>x:</label>
        <label>
            <input type="text" name="x" placeholder="Enter a number here">
        </label><br><br>
        <label>y:</label>
        <input type="text" name="y" placeholder="Enter a number here"><br><br>
        <label>z:</label>
        <input type="text" name="z" placeholder="Enter a number here"><br><br>
         <label>w:</label>
        <input type="text" name="w" placeholder="Enter a number here"><br><br>

        <input type="submit" value="Result is"><br><br>

    </form>

</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $w = $_POST["w"];

    $total = null;

    //$newNum = abs($x);
    $total = max($x, $y, $z, $w);
    echo $total;



