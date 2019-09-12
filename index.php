<?php

$siusklines_turis = 40;
$siuskliu_turis_per_d = 15;
$max_kaupo_turis = rand(1, 20);
$dienos = ($siusklines_turis + $max_kaupo_turis) / $siuskliu_turis_per_d;
$data = date('Y.m.d', strtotime(+floor($dienos) . 'day'));

?>
<hmtl>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>Po <?php print floor($dienos); ?>  dienų (<?php print $data; ?>)pirk gėlių ir šampano, jeigu nori išvengti
            konflikto.
        </p>
    </body>
</hmtl>
