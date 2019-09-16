<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 0; $i < 12; $i++) {
    $month_expenses = rand(1, 700);
    $wallet += $month_income - $month_expenses;
}

$h2_text = "Po $months m., prognuozuojamas likutis: $wallet.";

?>
<html>
<head>
    <meta charet="UTF-8">
</head>
<body>
    <h1>Wallet forecast</h1>
    <h2><?php print $h2_text; ?></h2>
</body>
</html>