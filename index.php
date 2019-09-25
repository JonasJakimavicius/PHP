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

function get_winning_rows($array)
{
    foreach ($array as $row_id => $row) {
        $array_length = count($array);
        $win = 0;
        foreach ($row as $slot_id => $slot) {

            if ($slot === 1) {
                $win++;
            }

            if ($win == $array_length) {
                $winning_rows[] = $row_id;
            }

        }
    }
    if (isset($winning_rows)) {
        return $winning_rows;
    }
}

$winning_rows = get_winning_rows($slot_machine);
var_dump($winning_rows);

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .row {
            display: block;
            width: 130px;
            margin: auto;
        }

        .square {
            display: inline-block;
            width: 40px;
            height: 40px;
        }

        .color-0 {
            background-color: blue;
        }

        .color-1 {
            background-color: red;
        }
    </style>
</head>
<body>
    <?php foreach ($slot_machine as $slot_id => $slot): ?>
        <div class="row">
            <?php foreach ($slot as $square_id => $square): ?>
                <div class="square color-<?php print $square; ?>"></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
