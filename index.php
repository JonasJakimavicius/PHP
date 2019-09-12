<?php

$graza1 = rand(1, 100);
$graza2 = rand(101, 200);
$skola = rand(201, 300);

?>
<hmtl>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei paėmei <?php print $skola; ?> eurų</h3>
            <h3> su dviem kabančiais grąžinsi <?php print $graza2; ?> </h3>
            <h3> su vienu kabančiu grąžinsi <?php print $graza1; ?>.</h3>
        </div>
    </body>
</hmtl>
