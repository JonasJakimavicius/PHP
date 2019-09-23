<?php

$moods =
    [
        [
            [
                'bg-class' => 'bg-color-0',
                'color-class' => 'color-0',
                'emotion' => 'Bl',
                'text' => 'Neparūkiau',
            ],
            [
                'bg-class' => 'bg-color-0',
                'color-class' => 'color-0',
                'emotion' => 'Bl',
                'text' => 'Neišgėriau kavos',
            ],
            [
                'bg-class' => 'bg-color-0',
                'color-class' => 'color-0',
                'emotion' => 'Bl',
                'text' => 'Pramiegojau',
            ],
        ],
        [
            [
                'bg-class' => 'bg-color-1',
                'color-class' => 'color-1',
                'emotion' => 'Px',
                'text' => 'Apsipyliau kava',
            ],
            [
                'bg-class' => 'bg-color-1',
                'color-class' => 'color-1',
                'emotion' => 'Px',
                'text' => 'Baigėsi kava',
            ],
            [
                'bg-class' => 'bg-color-1',
                'color-class' => 'color-1',
                'emotion' => 'Px',
                'text' => 'Baigėsi pienas',
            ],

        ],

        [
            [
                'bg-class' => 'bg-color-2',
                'color-class' => 'color-2',
                'emotion' => 'Nx',
                'text' => 'Pamiršau piniginę',
            ],
            [
                'bg-class' => 'bg-color-2',
                'color-class' => 'color-2',
                'emotion' => 'Nx',
                'text' => 'Katinas primyžo į batus',
            ],
            [
                'bg-class' => 'bg-color-2',
                'color-class' => 'color-2',
                'emotion' => 'Nx',
                'text' => 'Neužsivedė mašina',
            ],

        ],
        [
            [
                'bg-class' => 'bg-color-3',
                'color-class' => 'color-3',
                'emotion' => 'Pzda',
                'text' => 'Pavogė mašiną',
            ],
            [
                'bg-class' => 'bg-color-3',
                'color-class' => 'color-3',
                'emotion' => 'Pzda',
                'text' => 'Pavogė piniginę',
            ],
            [
                'bg-class' => 'bg-color-3',
                'color-class' => 'color-3',
                'emotion' => 'Pzda',
                'text' => 'Neturiu rūkyt',
            ],

        ],

    ];

$random_number = rand(0, 3);


?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        ul {
            padding-top: 100px;
        }

        .thermometer-round {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: red;
            display: inline-block;
            float: left;
        }

        .thermometer-square {
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
    <div class="thermometer-round"></div>
    <?php for ($i = 0; $i <= $random_number; $i++): ?>
        <div class="thermometer-square <?php print $moods[$i][rand(0, 2)]['bg-class']; ?>">
            <?php if ($i == $random_number): ?>
                <?php print $moods[$i][0]['emotion']; ?>
            <?php endif; ?>
        </div>
    <?php endfor; ?>
    <?php for ($i = 0;
               $i < 3 - $random_number;
               $i++): ?>
        <div class="thermometer-square bg-color-grey"></div>
    <?php endfor; ?>
    <ul>
        <?php for ($i = 0; $i <= $random_number; $i++): ?>
            <li class="<?php print $moods[$i][rand(0, 2)]['color-class'] ?>">  <?php print $moods[$i][rand(0, 2)]['text'] ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
