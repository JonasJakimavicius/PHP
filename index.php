<?php

$sudas1 = rand(1, 100);
$sudas2 = rand(101, 200);
$sudas3 = rand(201, 300);

?>
<hmtl>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei paėmei <?php print $sudas1; ?> eurų</h3>
            <h3>su dviem kabančiais grąžinsi <?php print $sudas3; ?></h3>
            <h3>su vienu kabančiu grąžinsi <?php print $sudas2; ?></h3>
        </div>
    </body>
</hmtl>
