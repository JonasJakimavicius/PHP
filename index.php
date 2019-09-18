<?php

$mano_atmintis = ['Penktadienis', 'Paskaita', 'Baras', 'Alus', 'Draugai'];
$draugo_atmintis = ['Penktadienis', 'Paskaita', 'Baras', 'Alus', 'Blackout'];
$bendra_atmintis = [];

$count_mano_atmintis = count($mano_atmintis) - 1;
$rand_flashback = rand(0, $count_mano_atmintis);

$flashback_text = "Flashback $rand_flashback : $mano_atmintis[$rand_flashback]";

foreach ($mano_atmintis as $mano_prisiminimas) {

    foreach ($draugo_atmintis as $draugo_prisiminimas) {

        if ($mano_prisiminimas == $draugo_prisiminimas) {
            $bendra_atmintis[] = $mano_prisiminimas;
        }
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Kas buvo penktadienį?</h1>
    <h2>Jono atmintis</h2>
    <h3><?php print $flashback_text; ?></h3>
    <ul>
        <?php foreach ($mano_atmintis as $prisiminimas): ?>
            <li><?php print $prisiminimas; ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Draugo atmintis</h2>
    <ul>
        <?php foreach ($draugo_atmintis as $prisiminimas): ?>
            <li><?php print $prisiminimas; ?></li>
        <?php endforeach; ?>
    </ul>
    <h3>Sutapę prisiminimai:</h3>
    <ul>
        <?php foreach ($bendra_atmintis as $prisiminimas): ?>
            <li><?php print $prisiminimas; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>