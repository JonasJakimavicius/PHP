<?php

var_dump($_POST);
function square($x)
{
    return $x ** 2;
}

if (isset($_POST['submit'])) {
    $atsakymas = 'Atsakymas: ' . square($_POST['variable']);
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <input type="number" name="variable" required>
        <input type="submit" name="submit">
    </form>
    <h1><?php isset($atsakymas) ? print $atsakymas : false; ?></h1>
</body>
</html>
