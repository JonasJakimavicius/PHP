<?php

$strings = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

$count_strings_array = count($strings) - 1;
$random_string = $strings[rand(0, $count_strings_array)];
//$root = array_rand($strings);

$song = [];


for ($a = 0; $a < 3; $a++) {
    $root = array_rand($strings);

    for ($i = 1; $i < 4; $i++) {
        $every_th_numb = 2;
        $accord[] = $strings[$root];
        $root = $root + $every_th_numb;

        if ($root > $count_strings_array) {
            $root = $root - $count_strings_array - 1;
        }
    }
    $song[$a] = $accord;
    $accord = [];
}

var_dump($song);

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        div {
            width: 20px;
            height: 100px;
            border: solid 1px black;
            display: inline-block;
        }

        .black {
            background-color: lightgrey;
        }
    </style>
</head>
<body>

    <?php foreach ($song as $lyrics_id => $lyrics): ?>
        <?php foreach ($strings as $note_id => $note): ?>
            <?php foreach ($lyrics as $letter_id => $letter): ?>
                <?php if ($letter == $note): ?>
                    <div class="key  <?php print'black'; ?> ">
                <?php endif; ?>
            <?php endforeach; ?>
            <?php print $note; ?>
            </div>

        <?php endforeach; ?>
        <br>
    <?php endforeach; ?>

</body>
</html>
