<?php

var_dump($_POST);
function square($x)
{
    return $x ** 2;
}

if (isset($_POST['submit'])) {
    if (is_numeric($_POST['variable'])) {
        $atsakymas = 'Atsakymas: ' . square($_POST['variable']);
    } else{
        $atsakymas='Įrašykite skaičių';
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <input type="number" name="variable">
        <input type="submit" name="submit">
    </form>
    <h1><?php isset($atsakymas) ? print $atsakymas : false; ?></h1>
</body>
</html>
