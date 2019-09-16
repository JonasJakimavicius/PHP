<?php

$days = 365;
$pack_price = 3.5;
$count_ttl = 0;

for ($i = 1; $i < $days; $i++) {
    $current_day = date('l');

    if ($current_day == 'Monday' || $current_day == 'Tuesday' || $current_day == 'Wednesday' || $current_day == 'Thursday' || $current_day == 'Friday') {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
        $current_day = date('l', strtotime("+ $i days"));

    } elseif ($current_day == 'Saturday') {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
        $current_day = date('l', strtotime("+ $i days"));
    }

    $cigs_sun = rand(1, 5);
    $count_ttl += $cigs_sun;
    $current_day = date('l', strtotime("+ $i days"));
}

$price_ttl = $count_ttl / 20 * $pack_price;

$h2_text = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Mano dūmų skaičiuoklė</h1>
    <h2><?php print $h2_text; ?></h2>
</body>
</html>