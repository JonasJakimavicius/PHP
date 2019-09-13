<?php

$distance = rand(1, 100);
$consumption = 7.5;
$price_1 = 1.3;
$my_money = 100;

$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;
if ($price_trip > $my_money) {
    $iperkama = 'neįperkama';
} else {
    $iperkama = 'įperkama';
}

$nuvaziuotas_kelias = 'Nuvažiuota distancija: ' . $distance . ' km.';
$kuro_sanaudos = 'Sunaudota ' . $fuel_total . ' l. kuro.';
$islaidos = 'Kaina ' . $price_trip . ' pinigų.';
$ar_galiu_vaziuot = 'Išvada: Kelionė ' . $iperkama;

?>
<html>
<head>
    <meta charet="UTF-8"
</head>
<body>
    <h1>Kelionės skaičiuoklė</h1>
    <ul>
        <li><?php print $nuvaziuotas_kelias; ?></li>
        <li><?php print $kuro_sanaudos; ?></li>
        <li><?php print $islaidos; ?></li>
        <li><?php print $my_money; ?></li>
    </ul>
    <hr>
    <p><?php print $ar_galiu_vaziuot; ?></p>
</body>
</html>
