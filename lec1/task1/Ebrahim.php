<?php
$x = 1;
$y = &$x;
$x = 30;
echo $y;
echo "<br>";
$city = "cairo";
$$city = "shoubra";
echo $$city;
echo "<br>";
echo $cairo;
echo "<br>";

var_dump($city);
echo "<br>";
$a = true;
echo $a;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebrahim</title>
</head>
<body>
    <?php

    ?>
</body>
</html>