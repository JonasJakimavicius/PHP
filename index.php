<?php

$grikiai = 5000;
$grikiu_likutis = $grikiai;
$days = 0;

for ($per_day = rand(200, 500); $grikiu_likutis > $per_day; $per_day = rand(200, 500)) {
    $grikiu_likutis -= $per_day;
    $days++;
}

$data = date('Y-m-d', strtotime("+ $days days"));
$h2_text = "Rasta grikių: $grikiai g.";
$h3_text = "Išgyvensiu dar $days dienas, iki $data."

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Kiek dienų galėsi valgyti grikius?</h1>
    <h2><?php print $h2_text; ?></h2>
    <h3><?php print $h3_text; ?></h3>
</body>
</html>