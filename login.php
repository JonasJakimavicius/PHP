<?php

require('functions/form/core.php');
require('functions/html/generators.php');
require('functions/file.php');

$form = [
    'attr' => [],
    'fields' => [
        'email' => [
            'type' => 'text',
            'attr' => [
                'placeholder' => 'Elektroninio pašto adresas',
            ],
            'validate' => [
                'validate_not_empty',
                'validate_email',
            ],
        ],
        'password' => [
            'type' => 'password',
            'attr' => [
                'placeholder' => 'Slaptažodėlis',
            ],
            'validate' => [
                'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'button' => [
            'type' => 'submit',
            'value' => 'Join'
        ],
    ],
    'validators' => [
        'validate_login',
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

session_start();
var_dump($_SESSION);

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($form, $filtered_input);
}

function form_success($filtered_input)
{
   $_SESSION['user']=$filtered_input['email'];
}

function form_fail($filtered_input, &$form)
{
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php require('templates/form.tpl.php'); ?>
</body>
</html>
