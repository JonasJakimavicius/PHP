<?php

function add($x, $y)
{
    $sum = $x + $y;
    return print "$x + $y suma: $sum";
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1><?php add(8, 3); ?></h1>
</body>
</html>
