<?php

$x = 3;
$y = 4;

function sum($x, $y)
{
    return $x + $y;
}

$suma = "$x + $y suma: " . sum($x, $y);

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1><?php print $suma; ?></h1>
</body>
</html>
