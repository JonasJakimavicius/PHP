<?php

var_dump($_POST);

$button_number = 0;

if (isset($_POST['submit'])) {
    $button_number = $_POST['submit'];
    $button_number++;
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <input type="submit" name="submit" value="<?php print $button_number; ?>">
    </form>
</body>
</html>
