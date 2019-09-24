<?php

$drinks =
    [
        [
            'name' => 'Vilkmergės alus',
            'price_stock' => 3.6,
            'discount' => 0,
            'img' => 'url("https://www.barbora.lt/api/Images/GetInventoryImage?id=0878876b-a242-4332-a48d-1f49d1359734")',
        ],
        [
            'name' => 'Stumbro degtinėla',
            'price_stock' => 11.79,
            'discount' => 5,
            'img' => 'url("https://static.pricer.lt/dynamic/foreign.png?image=https%3A%2F%2Fwww.iki.lt%2Fassets%2FUploads%2FAlco%2F57983.JPG")',
        ],
        [
            'name' => 'Švyturio alus',
            'price_stock' => 2.6,
            'discount' => 3,
            'img' => 'url("https://www.barbora.lt/api/Images/GetInventoryImage?id=f9c116ed-25ce-4e20-be8b-62727efa4862")',
        ],
        [
            'name' => 'Dainavos trauktinė',
            'price_stock' => 10.6,
            'discount' => 0,
            'img' => 'url("http://intermarket.lt/image/cache/catalog/Alkoholiniai%20g%C4%97rimai,%20cigaret%C4%97s/Stiprieji%20g%C4%97rimai/_DSC1801%20as%20Smart%20Object-1%20copy-1000x1000.png")',
        ],

    ];

foreach ($drinks as $drink_id => $drink) {
    $drinks[$drink_id]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] / 100 * $drink['discount']);
}