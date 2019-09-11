<?php

$irPHP = 'ir PHP';
$metai = date('Y');
$menuo = date('F');
$diena = date('d');


$metais = date('Y', strtotime('+1 year'));
$rytojus = date('Y.m.d', strtotime('+1 day'));
$laikas = date('H:m:s', strtotime('-1 hour'));

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP lydės ir <?php print$rytojus; ?></title>
</head>
<body>
<h1>Jonas - PHP su manim buvo ir <?php print $laikas; ?> </h1>
<h1>Jonas - HTML ir <?php print $irPHP; ?> asas jau nuo <?php print $metai; ?> metų. </h1>
<p> Viskas prasidėjo <?php print $menuo; ?> mėnesio, <?php print $diena; ?> dieną!</p>
<p> <?php print $metai ?> ne už kalnų!</p>
</body>
</html>

