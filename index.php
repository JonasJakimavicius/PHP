<?php

$zodziai = ['Petras', 'Laukė', 'Prie', 'Maximos', 'Antradienį'];
$rasinys = [];

$zodziai_count = (count($zodziai) - 1);

for ($i = 0; $i < rand(0, 50); $i++) {
    $rasinys[] = $zodziai[rand(0, $zodziai_count)];
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Lietuvių egzaminas</h1>
    <p>
        <?php foreach ($rasinys as $zodis): ?>
            <?php print $zodis; ?>
        <?php endforeach; ?>
    </p>
</body>
</html>
