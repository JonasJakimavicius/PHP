<?php

require('functions/form/core.php');
require('functions/html/generators.php');

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
            'label' => 'nickname',
            'attr' => [
                'placeholder' => 'Nickname',
            ],
            'validate' => [
                'validate_not_empty',
            ],
        ],
        'password' => [
            'type' => 'password',
            'label' => 'password',
            'attr' => [
                'placeholder' => 'Password',
            ],
            'validate' => [
                'validate_not_empty',
                'validate_password',
            ],
        ],
    ],
    'buttons' => [
        'button' => [
            'type' => 'submit',
            'value' => 'register'
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
};

function form_success($filtered_input)
{
    var_dump('You in!');
}

function form_fail()
{
    var_dump('Retard alert');
}

function array_to_file($array, $file_name)
{
    $data = json_encode($array);
    $file = file_put_contents($file_name, $data);
    if ($file === false) {
        return false;
    } elseif ($file == 0) {
        return true;
    } else {
        return true;
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pirma uzduotis</title>
</head>
<body>
<?php require('templates/form.tpl.php'); ?>
</body>
</html>
