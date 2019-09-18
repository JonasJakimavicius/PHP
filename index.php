<?php

$mano_atmintis = ['Penktadienis', 'Paskaita', 'Baras', 'Alus', 'Draugai'];

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Kas buvo penktadienį?</h1>
    <h2>Jono atmintis</h2>
    <ul>
        <?php foreach ($mano_atmintis as $prisiminimas): ?>
            <li><?php print $prisiminimas; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
