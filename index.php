<?php

function slot_run($x, $y)
{
    $array = [];
    for ($i = 0; $i < $x; $i++) {
        for ($j = 0; $j < $y; $j++) {
            $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}

$slot_machine = slot_run(3, 3);
var_dump($slot_machine);

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

</body>
</html>
