<?php

function square($x)
{
    return $x ** 2;
}

 if (isset($_POST)) {
     $atsakymas= 'Atsakymas: ' . square($_POST['variable']);
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <input type="number" name="variable">
        <input type="submit">
    </form>
    <h1><?php print $atsakymas;?></h1>
</body>
</html>
