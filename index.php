<?php

require('functions/form/core.php');
require('functions/html/generators.php');
require('functions/file.php');

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'post',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'attr' => [
                'placeholder' => 'Team name',
            ],
            'validate' => [
                'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'button' => [
            'type' => 'submit',
            'value' => 'Create'
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    $success = validate_form($form, $filtered_input);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PZ2ABALLAS</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<div class="container">
    <h2 class="title">Register</h2>
    <?php require('templates/form.tpl.php'); ?>
</div>
</body>
</html>