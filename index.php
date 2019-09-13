<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $pasekmes = 'grįžai vėlai';
} elseif ($grizai_velai && !$grizai_isgeres) {
    $pasekmes = 'grįžai vėlai ir išgėręs';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $pasekmes = 'grįžai išgėręs';
} else {
    $pasekmes = 'nieko nepadarei';
}

$aplinkybes = 'Situacija ' . $pasekmes;

?>
<html>
<head>
    <meta charet="UTF-8">
</head>
<body>
    <h1>Buitinė skaičiuoklė</h1>
    <h2><?php print $aplinkybes; ?></h2>
</body>
</html>
