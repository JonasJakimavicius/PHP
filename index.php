<?php

function square($x)
{
    return $x ** 2;
}

if (isset($_POST)) {
    print 'Atsakymas: ' .  square($_POST['variable']);
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
</body>
</html>
