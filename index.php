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
    <style>
        .img {
            background-image: url("https://assets.shop.loblaws.ca/products_jpeg/20175355001/en/20175355001_lrg_1_@1x.jpg");
            height: 100px;
            width: 100px;
            background-size: cover;
            background-position: center;
            display: inline-block;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="submit" name="submit" value="<?php print $button_number; ?>">
    </form>
    <?php for ($i = 0; $i < $button_number; $i++): ?>
        <div class="<?php print 'img'; ?>"></div>
    <?php endfor; ?>
</body>
</html>
