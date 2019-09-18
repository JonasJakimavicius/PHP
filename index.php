<?php

$mano_atmintis = ['Penktadienis', 'Paskaita', 'Baras', 'Alus', 'Draugai'];

$rand_flashback = rand(0, 4);

$flashback_text = "Flashback $rand_flashback : $mano_atmintis[$rand_flashback]";

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
</body>
</html>
