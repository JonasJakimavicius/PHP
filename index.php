<?php

$moods =
    [
        ['Neparūkiau', 'Neišgėriau kavos', 'Pramiegojau',],
        ['Apsipyliau kava', 'Baigėsi kava', 'Baigėsi pienas',],
        ['Pamiršau piniginę', 'Katinas primyžo į batus', 'Neužsivedė mašina',],
        ['Pavogė mašiną', 'Pavogė piniginę', 'Neturiu rūkyt'],
    ];

$random_number = rand(0, 3);
$number = 0;
$number2 = 0;

if ($random_number == 0) {
    $text = 'Bl';
} elseif ($random_number == 1) {
    $text = 'Px';
} elseif ($random_number == 2) {
    $text = 'Nx';
} else {
    $text = 'PZDA';
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        ul {
            padding-top: 100px;
        }

        .round {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: red;
            display: inline-block;
            float: left;
        }

        .square {
            height: 50px;
            width: 100px;
            border: 1px solid black;
            display: inline-block;
            float: left;
        }

        .color-0 {
            color: green;

        }

        .color-1 {
            color: yellow;

        }

        .color-2 {
            color: orange;

        }

        .color-3 {
            color: red;

        }

        .bg-color-0 {
            background-color: green;

        }

        .bg-color-1 {
            background-color: yellow;

        }

        .bg-color-2 {
            background-color: orange;

        }

        .bg-color-3 {
            background-color: red;

        }

        .bg-color-grey {
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="round"></div>
    <?php foreach ($moods as $mood_id => $mood): ?>
        <?php if ($random_number >= $number): ?>
            <div class="square bg-color-<?php print $mood_id; ?>">
                <?php if ($mood_id == $random_number): ?>
                    <?php print $text; ?>
                <?php endif; ?>
            </div>
            <?php $number++; ?>
        <?php else: ?>
            <?php for ($i = 0; $i < 3 - $random_number;
                       $i++): ?>
                <div class="square bg-color-grey"></div>
            <?php endfor; ?>
            <?php break; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <ul>
        <?php for ($i = 0; $i <= $random_number; $i++): ?>
            <li class="color-<?php print $i; ?>">
                <?php print $moods[$i][rand(0, 2)]; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
