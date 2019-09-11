<html>
<head>
    <meta charset="UTF-8"/>
    <title>PHP lydės ir <?php print date('Y.m.d', strtotime('+' . rand(1, 10000000) . 'minutes')); ?></title>
    <style>
        .bomba {
            background-image: url("https://media.istockphoto.com/vectors/cartoon-bomb-illustration-vector-id842671590?k=6&m=842671590&s=612x612&w=0&h=D1A2a--svXcKUyosW2-StYy-2cUNz7c_Zf3RlcqJDK8=");
            height: 2<?php print date('s'); ?>px;
            width: 2<?php print date('s'); ?>px;
            background-size: cover;
        }

        .time-00 {
            background-image: url("data:image/jpeg;base64,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")
        }
    </style>

</head>
<body>
    <div class="bomba time-<?php print date('s'); ?>"></div>
    <p><?php print date('s'); ?></p>
</body>
</html>
