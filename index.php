<?php

$name = ['lupdazis', 'kremas', 'bananas', 'mandarinas', 'veidrodis'];
$size = [10, 20, 30, 40, 60, 40, 30, 99];
$rankinukas = [];

$random_number = rand(1, 50);
$name_array_count = (count($name) - 1);
$size_array_count = (count($size) - 1);

for ($i = 0; $i < $random_number; $i++) {
    $rankinukas[$i]['name'] = $name[rand(0, $name_array_count)];
    $rankinukas[$i]['size'] = $size[rand(0, $size_array_count)];
}

$rankinukas_array_count = (count($rankinukas));

foreach ($rankinukas as $daiktas_id => $daiktas) {
    $rankinukas[$daiktas_id]['repeat'] = 0;
    foreach ($rankinukas as $copy_id => $copy) {
        if ($daiktas['name'] === $copy['name'] && $daiktas['size'] === $copy['size']) {
            $rankinukas[$daiktas_id]['repeat']++;
            $rankinukas[$daiktas_id]['probability'] = round($rankinukas[$daiktas_id]['repeat'] / $rankinukas_array_count * 100, 2);
        }
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Ką moteris turi rankinuke</h1>
    <ul>
        <?php foreach ($rankinukas as $daiktas): ?>
            <li>  <?php print "{$daiktas['name']} užima {$daiktas['size']} cm3. Tikimybė rasti: {$daiktas['probability']} %"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>