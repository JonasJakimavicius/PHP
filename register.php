<?php

require('functions/form/core.php');
require('functions/html/generators.php');
require('functions/file.php');

$form = [
    'attr' => [],
    'fields' => [
        'full_name' => [
            'type' => 'text',
            'attr' => [
                'placeholder' => 'Nickname'
            ],
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'email' => [
            'type' => 'text',
            'attr' => [
                'placeholder' => 'Elektroninio pašto adresas',
            ],
            'validate' => [
                'validate_not_empty',
                'validate_email',
                'validate_email_unique'
            ],
        ],
        'password' => [
            'type' => 'password',
            'attr' => [
                'placeholder' => 'Slaptažodėlis',
            ],
            'validate' => [
                'validate_not_empty',
                'validate_password',
            ],
        ],
        'password_repeat' => [
            'type' => 'password',
            'attr' => [
                'placeholder' => 'Pakartojam slaptažodėlį',
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
        'validate_fields_match' => [
            'password',
            'password_repeat'
        ]
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    validate_form($form, $filtered_input);
}

function form_success($filtered_input)
{
    if (file_exists('data/users.txt')) {
        $array = file_to_array('data/users.txt');
    }
    $array[] = $filtered_input;
    array_to_file('data/users.txt', $array);
}

function form_fail($filtered_input, &$form)
{
}


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <?php require('templates/form.tpl.php'); ?>
</body>
</html>
