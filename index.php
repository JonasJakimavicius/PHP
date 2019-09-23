<?php

$moods =
    [
        [
            [
                'bg-class' => 'bg-color-0',
                'color-class' => 'color-0',
                'emotion' => 'Bl',

            ],
            [

                'text' => 'Neparūkiau',
            ],
            [

                'text' => 'Neišgėriau kavos',
            ],
            [

                'text' => 'Pramiegojau',
            ],
        ],
        [
            [
                'bg-class' => 'bg-color-1',
                'color-class' => 'color-1',
                'emotion' => 'Px',
            ],

            [

                'text' => 'Apsipyliau kava',
            ],
            [

                'text' => 'Baigėsi kava',
            ],
            [
                'text' => 'Baigėsi pienas',
            ],

        ],

        [
            [
                'bg-class' => 'bg-color-2',
                'color-class' => 'color-2',
                'emotion' => 'Nx',
            ],
            [
                'text' => 'Pamiršau piniginę',
            ],
            [
                'text' => 'Katinas primyžo į batus',
            ],
            [
                'text' => 'Neužsivedė mašina',
            ],

        ],
        [
            [
                'bg-class' => 'bg-color-3',
                'color-class' => 'color-3',
                'emotion' => 'Pzda',
            ],
            [

                'text' => 'Pavogė mašiną',
            ],
            [
                'text' => 'Pavogė piniginę',
            ],
            [

                'text' => 'Neturiu rūkyt',
            ],

        ],

    ];

$random_number = rand(0, 3);

foreach ($moods as $mood_id => $mood) {

    if ($mood_id > $random_number) {
        $moods[$mood_id][0]['bg-class'] = 'bg-color-grey';
    }

    if ($mood_id != $random_number) {
        $moods[$mood_id][0]['emotion'] = '';
    }
}

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
    <?php foreach ($moods as $mood_id => $mood): ?>
        <div class="thermometer-square <?php print $moods[$mood_id][0]['bg-class']; ?>">
            <?php print $moods[$mood_id][0]['emotion']; ?>
        </div>
    <?php endforeach; ?>
    <ul>
        <?php for ($i = 0; $i <= $random_number; $i++): ?>
            <li class=" <?php print $moods[$i][0]['color-class'] ?>">
                <?php print $moods[$i][rand(1, 3)]['text'] ?>
            </li>
        <?php endfor; ?>
    </ul>
</body>
</html>
