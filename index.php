<?php

$target_days = mktime(0, 0, 0, 12, 31, 2019);
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days / 86400);
$pack_price = 3.5;
$count_ttl = 0;
$time_per_cig = 5;

for ($i = 0; $i < $days; $i++) {
    $current_day = date('N', strtotime("+ $i days"));

    if ($current_day <= 5) {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;

    } elseif ($current_day == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;

    } else {
        $cigs_sun = rand(1, 5);
        $count_ttl += $cigs_sun;
    }
}
$price_ttl = $count_ttl / 20 * $pack_price;
$time_ttl = $count_ttl * $time_per_cig;
$cig_left = $count_ttl;

$h2_text = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
$h3_text = "Viso traukdamas prastovėsiu $time_ttl valandų";

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .cig_img {
            height: 10px;
            width: 10px;
            background-position: center;
            background-image: url("http://www.rw-designer.com/icon-image/11364-256x256x32.png");
            background-size: cover;
            display: inline-block;
            float:left;
        }

        .package {
            height: 20px;
            width: 100px;
            display: inline-block;
            border: solid 1px;
            float:left;
        }
    </style>
</head>
<body>
    <h1>Mano dūmų skaičiuoklė</h1>
    <h2><?php print $h2_text; ?></h2>
    <h3><?php print $h3_text; ?></h3>

    <?php for ($cig = 0; $cig <= $count_ttl;$cig += 20): ?>
    <?php $likutis = $cig_left > 20 ? 20 : $cig_left; ?>

    <div class="<?php print'package'; ?>">
        <?php for ($i = 0; $i < $likutis; $i++): ?>
            <?php $cig_left--; ?>

            <div class="<?php print'cig_img'; ?>"></div>
        <?php endfor; ?>
        <?php endfor; ?>
    </div>
</body>
</html>