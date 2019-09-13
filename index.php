<?php

$distance = rand(1, 100);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = $distance * $consumption;
$price_trip = $fuel_total * $price_1;
$nuvaziuotas_kelias = 'Nuvažiuota distancija: ' . $distance . ' km.';
$kuro_sanaudos = 'Sunaudota ' . $fuel_total . ' l. kuro.';
$islaidos = 'Kaina ' . $price_trip . ' pinigų';
?>
<hmtl>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kelionės skaičiuoklė</h1>
        <li><?php print $nuvaziuotas_kelias; ?></li>
        <li><?php print $kuro_sanaudos; ?></li>
        <li><?php print $islaidos; ?></li>
    </body>
</hmtl>
