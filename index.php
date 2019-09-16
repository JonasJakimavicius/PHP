<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);
$katasuniai = 0;

for ($i = 1; $i <= $kates; $i++) {
    for ($x = 1; $x <= $sunys; $x++) {
        if ($pavyko) {
            $katasuniai++;
            break;
            }
        }
    }

$dalyviai = "Dalyvavo $kates katės ir $sunys šunys.";
$katasuniu_iseiga = "Katašunių išeiga: $katasuniai.";

?>
<html>
<head>
    <meta charet="UTF-8">
</head>
<body>
    <h1>Katašunių išeiga</h1>
    <h2><?php print $dalyviai; ?></h2>
    <h3><?php print $katasuniu_iseiga; ?></h3>
</body>
</html>