<html>
<head>
    <meta charset="UTF-8"/>
    <title>PHP lydės ir <?php print date('Y.m.d', strtotime('+' . rand(1, 10000000) . 'minutes')); ?></title>
</head>
<body style='background-color: rgb(<?php print rand(1, 255) . ',' . rand(1, 255) . ',' . rand(1, 255); ?>)'>
    <h1 style='font-size: <?php print rand(1, 30); ?>'>Aš keičiu savo dydį</h1>
    <p style='color:rgb(<?php print rand(1, 255) . ', ' . rand(1, 255) . ', ' . rand(1, 255); ?>)'>
        Aš keičiu savo spalvą </p>
</body>
</html>

