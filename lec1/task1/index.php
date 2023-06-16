<?php
$name = "Ebrahim";
$number = 005;
define('myName', 'Ebrahim');
echo myName;
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        echo "my name is::". $name ;
        echo "<br>" ;
        echo  $name . " ".$number;
    ?>
</body>
</html>