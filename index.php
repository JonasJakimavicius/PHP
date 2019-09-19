<?php

$bank_report =
    [
        [
            'name' => 'Iki darbo uzmokescio',
            'amount' => 600,
        ],
        [
            'name' => 'Kalvariju nacnykas',
            'amount' => -15,
        ],
        [
            'name' => 'Meat lovers',
            'amount' => -20,
        ],
        [
            'name' => 'Gringo',
            'amount' => -40,

        ],
    ];

foreach ($bank_report as $money_transfer_id => $money_transfer) {
    if ($bank_report[$money_transfer_id]['amount'] > 0) {
        $bank_report[$money_transfer_id]['css_class'] = 'income';
    } else {
        $bank_report[$money_transfer_id]['css_class'] = 'expense';
    }
}

var_dump($bank_report);