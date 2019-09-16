<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

$h2_text = "Po $months m., prognuozuojamas likutis: $wallet.";

for ($month = 1; $month <= 12; $month++) {
    $month_expenses = rand(1, 1000);
    $wallet += $month_income - $month_expenses;
    if ($wallet < 0) {
        $h2_text = "Atsargiai, $month mėnesį gali baigtis pinigai.";
        break;
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Wallet forecast</h1>
    <h2><?php print $h2_text; ?></h2>
</body>
</html>