<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $pasekmes = 'grįžai vėlai';
    $sofa = 'nemiegosi';
} elseif ($grizai_velai && !$grizai_isgeres) {
    $pasekmes = 'grįžai vėlai ir išgėręs';
    $sofa = 'Miegosi';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $pasekmes = 'grįžai išgėręs';
    $sofa = 'nemiegosi';
} else {
    $pasekmes = 'nieko nepadarei';
    $sofa = 'nemiegosi';
}

$aplinkybes = 'Situacija ' . $pasekmes;
$miegosi = 'Išvada: ' . $sofa . ' ant sofos'

?>
<html>
<head>
    <meta charet="UTF-8">
</head>
<body>
    <h1>Buitinė skaičiuoklė</h1>
    <h2><?php print $aplinkybes; ?></h2>
    <h3> <?php print $miegosi; ?></h3>
</body>
</html>
