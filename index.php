<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // INPUT
    $increase = 529.73;
    $pto = 11.074 + 39.385;

    // CONSTANTS
    $tithing = 0.1;
    $offerings = 0.01;
    $hours = 40;

    // CALCULATIONS
    $i = $increase;
    $t = $increase * $tithing;
    $f = $increase * $offerings;
    $m = $increase * $offerings;
    $p = $pto / $hours

    // OUTPUT
    echo ceil($i);
    echo ceil($t);
    echo ceil($f);
    echo ceil($m);
    echo floor($p);
?>

</body>
</html>