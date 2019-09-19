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

$balance = 0;
$total_income = 0;
$total_expense = 0;

foreach ($bank_report as $money_transfer_id => $money_transfer) {
    $balance += $money_transfer['amount'];

    if ($bank_report[$money_transfer_id]['amount'] > 0) {
        $bank_report[$money_transfer_id]['css_class'] = 'income';
        $total_income += $money_transfer['amount'];
    } else {
        $bank_report[$money_transfer_id]['css_class'] = 'expense';
        $total_expense += $money_transfer['amount'];
    }
    $bank_report[$money_transfer_id]['text'] = "{$money_transfer['name']} : {$money_transfer['amount']}";
}
var_dump($bank_report);

?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .income {
            color: green;
        }

        .expense {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Banko ataskaita</h1>
    <h2><?php print "Balance: $balance eur"; ?></h2>
    <h3><?php print "Įplaukos: $total_income eur"; ?></h3>
    <h3><?php print "Išlaidos: $total_expense eur"; ?></h3>
    <ul>
        <?php foreach ($bank_report as $money_transfer): ?>
            <li class="<?php print $money_transfer['css_class']; ?>">
                <?php print $money_transfer['text']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>