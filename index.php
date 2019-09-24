<?php

$drinks =
    [
        [
            'name' => 'Vilkmergės alus',
            'price_stock' => 3.6,
            'discount' => 0,
            'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=0878876b-a242-4332-a48d-1f49d1359734',
        ],
        [
            'name' => 'Stumbro degtinėla',
            'price_stock' => 11.79,
            'discount' => 5,
            'img' => 'https://static.pricer.lt/dynamic/foreign.png?image=https%3A%2F%2Fwww.iki.lt%2Fassets%2FUploads%2FAlco%2F57983.JPG',
        ],
        [
            'name' => 'Švyturio alus',
            'price_stock' => 2.6,
            'discount' => 3,
            'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=f9c116ed-25ce-4e20-be8b-62727efa4862',
        ],
        [
            'name' => 'Dainavos trauktinė',
            'price_stock' => 10.6,
            'discount' => 0,
            'img' => 'http://intermarket.lt/image/cache/catalog/Alkoholiniai%20g%C4%97rimai,%20cigaret%C4%97s/Stiprieji%20g%C4%97rimai/_DSC1801%20as%20Smart%20Object-1%20copy-1000x1000.png',
        ],
    ];

foreach ($drinks as $drink_id => $drink) {
    $drinks[$drink_id]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] / 100 * $drink['discount']);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        img {
            height: 200px;
            width: 100px;
            background-position: center;
            background-size: cover;
            margin: auto;

        }

        .container {
            width: 120px;
            height: 280px;
            border: solid black 1px;
            float: left;
            margin-right: 5px;
        }

        .price {
            height: 20px;
            width: 50px;
            background-color: deeppink;
            color: white;
            position: relative;
            bottom: 200px;
            left: 70px;
        }

        .title {
            height: 20px;
            width: 80px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Drink catalogue</h1>
    <?php foreach ($drinks as $drink): ?>
        <div class='container'>
            <img src=<?php print $drink['img']; ?>></img>
            <div class="price"><?php print '€' . round($drink['price_retail'], 2); ?></div>
            <div class="title"><?php print $drink['name']; ?> </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
