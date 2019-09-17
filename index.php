<?php

$months = 24;
$car_price_new = 3000;
$depreciation = 2;
$car_price_used = $car_price_new;

for ($i = 0; $i < $months; $i++) {
    $car_price_used -= ($car_price_used / 100 * $depreciation);
}

$depr_perc = 100 - ($car_price_used / $car_price_new * 100);
$h2_text = "Naujos mašinos kaina: $car_price_new";
$h3_text = "Po $months mėn., mašinos vertė bus: $car_price_used eur";
$h4_text = "Mašina nuvertės $depr_perc proc";

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Kiek nuvertės mašina?</h1>
    <h2><?php print $h2_text; ?></h2>
    <h3><?php print $h3_text; ?></h3>
    <h4><?php print $h4_text; ?></h4>
</body>
</html>