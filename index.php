<?php

$name = ['lupdazis', 'kremas', 'bananas', 'grafke', 'veidrodelis'];
$size = [10, 20, 30, 40, 60, 80, 99, 90, 500];
$rankinukas = [];

$name_array_count = (count($name) - 1);
$size_array_count = (count($size) - 1);
$random_number = rand(0, 50);

for ($i = 0; $i < $random_number; $i++) {
    $rankinukas[$i]['name'] = $name[rand(0, $name_array_count)];
    $rankinukas[$i]['size'] = $size[rand(0, $size_array_count)];
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
            <li>  <?php print "{$daiktas['name']} užima {$daiktas['size']} cm3"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
