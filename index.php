<?php

$siusklines_turis = 40;
$siuskliu_turis_per_d = 15;
$max_kaupo_turis = rand(1, 20);
$likesLaikas = ($siusklines_turis + $max_kaupo_turis) / $siuskliu_turis_per_d;
$diena = date('Y-m-d', strtotime(+$likesLaikas . 'day'));
print $likesLaikas;
?>
<hmtl>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Po <?php print $diena; ?> pirk gėlių ir šampano, jeigu nori išvengti konflikto.</p>
    </body>
</hmtl>
