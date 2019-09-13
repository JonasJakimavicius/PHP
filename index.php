<?php

$sunny = rand(0, 1);

if ($sunny) {
    $weather = 'sun';
    $weathertext = 'saulėta';
} else {
    $weather = 'cloudy';
    $weathertext = 'debesuota';
}

?>
<html>
<head>
    <meta charet="UTF-8">
    <style>
        .sun {
            background: url("https://solarsystem.nasa.gov/system/basic_html_elements/x11561_Sun.png.pagespeed.ic.0igPUXQBpc.png");
            display: inline-block;
            height: 200px;
            width: 200px;
            background-size: cover;
        }

        .cloudy {
            background: url("https://images.unsplash.com/photo-1534088568595-a066f410bcda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80");
            display: inline-block;
            height: 200px;
            width: 200px;
            background-size: cover;
        }

        .text {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="<?php print $weather; ?>"></div>
    <div class="text"><?php print $weathertext; ?></div>
</body>
</html>
